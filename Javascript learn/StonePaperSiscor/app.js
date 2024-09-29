let userscore=0;
let compscore=0;

let choices=document.querySelectorAll(".choice");
const msg=document.querySelector("#msg");



const playGame=(userChoice)=>{
    let compChoice=genCompChoice();
    winner(userChoice,compChoice);
}
const genCompChoice=(userChoice)=>{
    let option=["rock","paper","scissors"];
    let random=Math.round(Math.random()*2);
    return option[random];

}
choices.forEach(choice=>{

    choice.addEventListener("click",()=>{
        let  userChoice=choice.getAttribute("id");
        playGame(userChoice);
    })
})

const winner=(userChoice,compChoice)=>{
    console.log("user choice is :",userChoice ,"and comp choice is ",compChoice);
    if(userChoice===compChoice){
        msg.innerText="Its a Draw";
        msg.style.backgroundColor="aqua";
    }
    else if((userChoice==="rock" && compChoice==="paper") || (userChoice==="paper" &&compChoice==="scissors") ||
        (userChoice==="scissors" && compChoice==="rock")){
        msg.innerText="Comp Wins!"
        msg.style.backgroundColor="red";
        compscore +=1;
        document.querySelector("#comp-score").innerText=compscore;

    }
    else{
        msg.innerText="You Win!";
        msg.style.backgroundColor="lightgreen";
        userscore +=1;
        document.querySelector("#user-score").innerText=userscore;
    }


}