(function() {
  window.leadpagesUX || (window.leadpagesUX = {});

  leadpagesUX.onboarding = {
    init: function() {
      this.h1 = document.querySelector('.onboardingTitle h1');
      this.h2 = document.querySelector('.onboardingTitle h2');
      this.onboardingBody = document.querySelector('.onboardingBody');
      this.questionnaireWrapper = document.querySelector('.questionnaireWrapper');
      this.pathInnerWrapper = document.querySelector('.pathInnerWrapper');
      this.backButton = document.querySelector('.button__back');
      this.skipButton = document.querySelector('.button__skip');
      this.nextButton = document.querySelector('.button__next');
      return this.bindings();
    },
    bindings: function() {
      var _t, triggers;
      _t = this;
      triggers = document.querySelectorAll('.triggerWrapper .trigger');
      [].forEach.call(triggers, function(trigger) {
        return trigger.addEventListener('click', function() {
          var q;
          q = trigger.dataset.questionnaire;
          if (q === 'explore') {
            return _t.skipQuestions();
          } else {
            _t.questionnaire = _t.questionnaires[q][0];
            return _t.startQuestions();
          }
        });
      });
      this.questionnaireWrapper.addEventListener('click', function(e) {
        var srcElement;
        srcElement = e.srcElement;
        if (e.srcElement.className === 'answer') {
          return _t.runAnswer(srcElement);
        }
      });
      return this.onboardingBody.addEventListener('click', function(e) {
        var srcElement, srcElementClasses;
        srcElement = e.srcElement;
        srcElementClasses = srcElement.classList;
        if (srcElementClasses.contains('button__back')) {
          return _t.stepBack();
        } else if (srcElementClasses.contains('startOver')) {
          return _t.restartQuestions();
        }
      });
    },
    user_data: {},
    stepBack: function() {
      var _t, lastQuestionSet;
      _t = this;
      if (document.body.classList.contains('pathSteps')) {
        document.body.classList.remove('pathSteps');
        _t.user_data[_t.questionnaire[_t.currentQuestionnaireState].data] = null;
        return this.changeHeadlines();
      } else if (this.currentQuestionnaireState) {
        lastQuestionSet = this.questionnaireWrapper.lastElementChild;
        lastQuestionSet.classList.add('slideOut');
        return setTimeout((function() {
          var newLastQuestionSet;
          _t.questionnaireWrapper.removeChild(lastQuestionSet);
          if (_t.currentQuestionnaireState === "A") {
            _t.restartQuestions();
          } else {
            newLastQuestionSet = _t.questionnaireWrapper.lastElementChild;
            _t.currentQuestionnaireState = newLastQuestionSet.dataset.state;
            newLastQuestionSet.classList.remove('fadeOut');
            _t.changeHeadlines();
          }
          try {
            return _t.user_data[_t.questionnaire[_t.currentQuestionnaireState].data] = null;
          } catch (error) {}
        }), 400);
      }
    },
    restartQuestions: function() {
      this.questionnaire = null;
      this.currentQuestionnaireState = null;
      document.body.classList.remove('questionSteps');
      document.body.classList.remove('pathSteps');
      return this.resetHeadlines();
    },
    startQuestions: function() {
      this.currentQuestionnaireState = 'A';
      this.changeHeadlines();
      this.addQuestions();
      return document.body.classList.add('questionSteps');
    },
    skipQuestions: function() {
      this.currentQuestionnaireState = 'A';
      document.body.classList.add('questionSteps');
      return this.addPath();
    },
    runAnswer: function(answer) {
      var _t, answerData, dataType, followup;
      _t = this;
      dataType = _t.questionnaire[_t.currentQuestionnaireState].data;
      answerData = answer.dataset.answer;
      followup = answer.dataset.followup;
      _t.user_data[dataType] = answerData;
      if (followup !== 'undefined') {
        this.currentQuestionnaireState = followup;
        return this.swapQuestions();
      } else {
        return _t.addPath();
      }
    },
    swapQuestions: function() {
      this.changeHeadlines();
      return this.addQuestions();
    },
    changeHeadlines: function() {
      this.h1.innerHTML = "<br />" + this.questionnaire[this.currentQuestionnaireState].h1;
      return this.h2.innerHTML = this.questionnaire[this.currentQuestionnaireState].h2;
    },
    resetHeadlines: function() {
      this.h1.innerHTML = "Welcome, Will!<br />What can we help you achieve?";
      return this.h2.innerHTML = "You’re going to accomplish a lot with Leadpages!  Tell us about your goals so we can customize your experience.  You can change your goal at any time.";
    },
    addPath: function() {
      this.h1.innerHTML = "<br />We recommend the Great Leadbox King path";
      this.h2.innerHTML = "";
      return document.body.classList.add('pathSteps');
    },
    answerMarkup: function(answer) {
      return "<span class='answer' data-answer='" + answer.data + "' data-followup='" + answer.followup + "'>" + answer.text + "</span>";
    },
    addQuestions: function() {
      var _t, answerHTML, answers, numQuestionSets;
      _t = this;
      answers = this.questionnaire[this.currentQuestionnaireState].answers;
      numQuestionSets = this.questionnaireWrapper.querySelectorAll('.questionSet').length;
      answerHTML = "<div class='questionSet questionSet--" + this.currentQuestionnaireState + "' data-state='" + this.currentQuestionnaireState + "'>";
      [].forEach.call(answers, function(answer) {
        return answerHTML += _t.answerMarkup(answer);
      });
      answerHTML += "</div>";
      if (numQuestionSets > 0) {
        this.questionnaireWrapper.lastElementChild.classList.add('fadeOut');
      }
      return this.questionnaireWrapper.insertAdjacentHTML('beforeend', answerHTML);
    },
    questionnaires: {
      'leadGathering': [
        {
          'A': {
            'h1': 'What kind of website do you have?',
            'h2': 'You’re off the ground and you’ve got some traffic. That’s awesome!  Let’s start turning your visitors into leads.',
            data: 'Type of site',
            'answers': [
              {
                data: 'website',
                text: 'I sell products or services',
                followup: 'B'
              }, {
                data: 'blog',
                text: 'I have a blog',
                followup: 'B'
              }, {
                data: 'webinar',
                text: 'I have a webinar',
                followup: 'C'
              }, {
                data: 'website',
                text: 'I do something else',
                followup: 'B'
              }
            ]
          },
          'B': {
            'h1': 'How much traffic does your website get?',
            'h2': 'The more visitors you have, the more leads you can convert.',
            data: 'Site traffic',
            'answers': [
              {
                data: '>10000',
                text: 'More than 10,000+ visitors/month',
                followup: 'D'
              }, {
                data: '5001-10000',
                text: '5,001 - 10,000 visitors/month',
                followup: 'D'
              }, {
                data: '1000-5000',
                text: '1,000 - 5,000 visitors/month',
                followup: 'D'
              }, {
                data: '<1000',
                text: 'Less than 1000 visitors/month',
                followup: 'D'
              }
            ]
          },
          'C': {
            'h1': 'How many viewers does your webinar have?',
            'h2': 'The more viewers you have, the more leads you can convert.',
            data: 'Webinar viewers',
            'answers': [
              {
                data: '500+',
                text: '500+ viewers',
                followup: 'D'
              }, {
                data: '100-500',
                text: '100 - 500 viewers',
                followup: 'D'
              }, {
                data: '<100',
                text: 'Less than 100 viewers',
                followup: 'D'
              }
            ]
          },
          'D': {
            'h1': "What's your level of experience in digital marketing?",
            'h2': '',
            data: 'Experience',
            'answers': [
              {
                data: 'advanced',
                text: "I'm a digital marketing rockstar"
              }, {
                data: 'medium',
                text: "I've done a little bit"
              }, {
                data: 'beginner',
                text: "I'm just starting out"
              }
            ]
          }
        }
      ],
      'landingPage': [
        {
          'A': {
            'h1': 'Landing page?',
            'h2': 'You are a landing page!!1',
            data: 'page!!1',
            'answers': [
              {
                data: 'website',
                text: 'I sell products or services'
              }, {
                data: 'blog',
                text: 'I have a blog'
              }, {
                data: 'webinar',
                text: 'I have a webinar'
              }, {
                data: 'website',
                text: 'I do something else'
              }
            ]
          }
        }
      ],
      'idea': [
        {
          'A': {
            'h1': 'You have idea??',
            'h2': 'I like M&Ms',
            data: 'idea tyme!',
            'answers': [
              {
                data: 'website',
                text: 'I sell products or services'
              }, {
                data: 'blog',
                text: 'I have a blog'
              }, {
                data: 'webinar',
                text: 'I have a webinar'
              }, {
                data: 'website',
                text: 'I do something else'
              }
            ]
          }
        }
      ]
    }
  };

}).call(this);
