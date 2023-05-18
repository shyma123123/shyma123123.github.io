var i=0
var j=0
const cards = document.querySelectorAll(".card");//holding each card in variable called cards
//here we will initialize some important variables
let matched = 0;
let cardOne, cardTwo;
let disableDeck = false;

function flipCard({target: clickedCard}) {//this function is used to allow the user to filp cards
    if(cardOne !== clickedCard && !disableDeck) {
        //we will enet this block id the 2 cards are not the  same and disableDeck is true
        clickedCard.classList.add("flip");
        if(!cardOne) {
            return cardOne = clickedCard;
        }
        cardTwo = clickedCard;
        disableDeck = true;
        let cardOneImg = cardOne.querySelector(".back-view img").src,
        cardTwoImg = cardTwo.querySelector(".back-view img").src;
        matchCards(cardOneImg, cardTwoImg);
    }
}
//this function will check if the 2 cards are matced(the same) or not
function matchCards(img1, img2) {
    //check if the 2 card are for the same book
    if(img1 === img2) {
        
    let tableBody = document.getElementById("tbody");
    tableBody.innerHTML = "";
    
    
      let row = tableBody.insertRow();
      let titleCell = row.insertCell();
      titleCell.textContent = ++j;
        matched++;
        //if all matched books are found the we will flip the cards again
        if(matched == 8) {
            
            setTimeout(() => {
                return shuffleCard();
            }, 1000);
            
                
        }
        //we will not filp them again if they are the same 
        cardOne.removeEventListener("click", flipCard);
        cardTwo.removeEventListener("click", flipCard);
        cardOne = cardTwo = "";
        return disableDeck = false;
    }
    //if they are no the same we will shake them and flip them back again
    setTimeout(() => {
        cardOne.classList.add("shake");
        cardTwo.classList.add("shake");
    }, 400);
//we will stop shking them 
    setTimeout(() => {
        cardOne.classList.remove("shake", "flip");
        cardTwo.classList.remove("shake", "flip");
        cardOne = cardTwo = "";
        disableDeck = false;
    }, 1200);

    let tableBody = document.getElementById("tbody");
    tableBody.innerHTML = "";
    
    
      let row = tableBody.insertRow();
      let titleCell = row.insertCell();
      titleCell.textContent = ++j;
      let authorCell = row.insertCell();
      authorCell.textContent = ++i;
      
      
    }
  

//this is the function that will run everything thing for us
function shuffleCard() {
    matched = 0;
    disableDeck = false;
    cardOne = cardTwo = "";
    let arr = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8];
    arr.sort(() => Math.random() > 0.5 ? 1 : -1);
    cards.forEach((card, i) => {
        card.classList.remove("flip");
        let imgTag = card.querySelector(".back-view img");
        card.addEventListener("click", flipCard);
    });
}

shuffleCard();
    //we can see this as thing that eacj card must do when it's clicked which is that we will flip it
cards.forEach(card => {
    card.addEventListener("click", flipCard);
});