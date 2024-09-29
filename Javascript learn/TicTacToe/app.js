let boxes=document.querySelectorAll(".box");
let resetbtn=document.querySelector("#reset-btn");
let newgame=document.querySelector("#new-game");
let container=document.querySelector(".game-container");
let para=document.querySelector("p");

let userO=true;


let winPattern=[
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [2,4,6],
    [0,4,8]
];

const newGame=()=>{
    userO=true;
    container.classList.add("hide");
    resetbox();

}
const resetbox=()=>{
    for(let box of boxes){
        box.innerText="";
        box.disabled=false;
    }
}
newgame.addEventListener("click",newGame);
resetbtn.addEventListener("click",resetbox);


boxes.forEach(box=>{
    box.addEventListener("click",()=>{
        console.log("button was clicked");
        if(userO){
            box.innerText="O";
            box.style.color="red";
            userO=false;
        }
        else{
            box.innerText="X";
            box.style.color="green";
            userO=true;
        }
        box.disabled=true;
        checkWinner();
    })
})
const winner=(win)=>{
    para.innerText=`Congratulations the winner is ${win}`;
container.classList.remove("hide");
}
const boxdisable=()=>{
    for(let box of boxes){
        box.disabled=true;
    }
}


function checkWinner(){
    for(let pattern of winPattern){
        let pos1value=boxes[pattern[0]].innerText;
        let pos2value=boxes[pattern[1]].innerText;
        let pos3value=boxes[pattern[2]].innerText;

        if(pos1value!=="" && pos2value!=="" && pos3value!==""){
            if(pos1value===pos2value && pos2value===pos3value){
                console.log(`the winner is ${pos1value}`);
                boxdisable();
                winner(pos1value);
            }
        }
    }
}