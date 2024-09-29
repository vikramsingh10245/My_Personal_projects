let heading=document.querySelector("#myhead");
const url="https://cat-fact.herokuapp.com/facts";
const getCatFacts=async()=>{
    let response= await fetch(url);
    let result=await response.json();
    console.log(result);
    console.log(result[0].text);
    heading.innerText=result[0].text;
}

