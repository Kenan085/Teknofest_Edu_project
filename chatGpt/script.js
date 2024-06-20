import {config} from "dotenv"
import {OpenAI} from "openai"
config()

const openai = new OpenAI( { apiKey: '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' } );
function name(params) {
    
}
openai.chat.completions.create({ 
    model: "gpt-3.5-turbo",
    messages: [
        { role: "user", content: "Make a quiz about math. Topic is integral. Question count is 3. Level is easy. Duration less than 20 minutes. With correct answers at the end. And use structure each question below. You should write 3 questions instead of 1 which is in structure. 1. [Question ] - [A) option] - [B) option] - [C) option] - [D) option] *Correct Answers:* 1. [answer]" }
    ]
}).then(res => {
    res.choices.forEach( out => console.log(out.message.content) );
});