let itemDivs = document.getElementsByClassName('items__card');
let subTotal = [];

Array.from(itemDivs).forEach((el) => {
    const itemId= el.id;
    const item = document.getElementById(`${itemId}`);
    item.addEventListener("click", () => {
       // when you click on one get the cost 
        let price = item.childNodes;
        price = price[3].id
        price = parseInt(price);
        // add the cost to subTotal array
        subTotal.push(price);
        // display new total each time something is added
        getAndDisplayTotal(subTotal);
    });
});


// function to add the values in array and display them in UI
const getAndDisplayTotal = (subTotalArray) => {
    //get total
    const total = subTotalArray.reduce((a,b) => a + b, 0);
    //display total
const totalUI = document.getElementById('total');
totalUI.innerText = `Total: ${total}`;
}


// if pay is pressed clear total 
const payBtn = document.getElementById('pay');
payBtn.addEventListener("click", () => {
    subTotal = [];
    getAndDisplayTotal(subTotal);
});


// if cancel is pressed clear total
const cancelBtn= document.getElementById('cancel');
cancelBtn.addEventListener("click", () => {
    subTotal = [];
    getAndDisplayTotal(subTotal);
});
