let itemDivs = document.getElementsByClassName('items__card');

Array.from(itemDivs).forEach((el) => {
    const itemId= el.id;
    const item = document.getElementById(`${itemId}`);
    item.addEventListener("click", e => {
        
        console.log('add numbers');
    });
});