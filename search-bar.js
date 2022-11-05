document.querySelector('#search-input').addEventListener('input', filterList);

function filterList() {
    const searchbar=document.querySelector('#search-input');
    const filter= searchbar.value.toLowerCase();
    const listItems =document.querySelectorAll('.product');

    listItems.forEach((item)=>{
        let text = item.textContent;
        if (text.toLocaleLowerCase().includes(filter.toLocaleLowerCase())) {
            item.style.display = '';
        } else {
            item.style.display='none';
        }
    });

}