const { OpenAI } = require("openai");
const openai = new OpenAI({ apiKey: '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' , dangerouslyAllowBrowser: true });

function generateQuizForSubjectAndTopic(subject, topic, numOfQuestions, level, lastId) {
  openai.chat.completions.create({
      model: "gpt-3.5-turbo",
      messages: [
          { role: "user", content: `Lets start new chat, forget everything what i have asked you before.Please provide a quiz about ${subject} with the topic of ${topic}. The quiz should contain ${numOfQuestions} questions it is important, each at a ${level} level. I am planning to add it to my mysql file pls make it easy to do so. Use only 1 INSERT INTO for all questions. Add them instead of '?' below
          INSERT INTO quiz (idquiz, question, option_a, option_b, option_c, option_d, correct_answer) 
          VALUES 
              (?,'?', '?', '?', '?', '?', '?');
          correct_answer and one of these option_a, option_b, option_c, option_d should be equal and value for idquiz is ${lastId}. i have written one example how it should like.
          for example im asking for make a quiz about biology with topic anotomy,number of questions is 2 and level is easy, you should give result such as below
          INSERT INTO quiz (idquiz,question, option_a, option_b, option_c, option_d, correct_answer) VALUES (${lastId},'Which of the following is the longest bone in the human body?', 'Humerus', 'Femur', 'Fibula', 'Tibia', 'Femur'), (${last_id},'What is the main function of the heart?', 'Pumping blood', 'Filtering waste', 'Digesting food', 'Regulating body temperature', 'Pumping blood');
          ` }
      ],
      temperature: 1
  }).then(function(res) {
      // Clear any existing quiz content
      document.getElementById('quizContainer').innerHTML = '';
      // Loop through the quiz choices and display them on the webpage
      res.choices.forEach(function(out, index) {
        var text1="";
        text1 = out.message.content;
          var startIndex = text1.indexOf("INSERT INTO quiz")+17;
          var endIndex = text1.indexOf("');", startIndex) + 3;
          document.getElementById('quizContainer').value = "INSERT INTO quiz"+text1.substring(startIndex, endIndex);
      });
  }).catch(function(error) {
      console.error("Error occurred:", error);
  });
}
setTimeout(function() {

  var lastId = document.getElementById('last_id').value;
if (lastId!="") {
    var subject = document.getElementById('subjectInput').value;
    var topic = document.getElementById('topicInput').value;
    var numOfQuestions = document.getElementById('numOfQuestionsInput').value;
    var level = document.getElementById('levelInput').value;
    
    generateQuizForSubjectAndTopic(subject, topic,numOfQuestions,level,lastId);
    
}
document.getElementById('last_id').value="";
}, 5000);


