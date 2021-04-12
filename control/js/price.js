document.addEventListener('click', function(el){
    if(el.target.classList.contains("del")){
        if(el.target.dataset.del){
            let id = el.target.dataset.del;
            let form = document.getElementById('form_del');
            let inp = form.querySelector('#form_del_id');
            if(inp){
                inp.value = id;
                form.submit();
            }
        }
    }else if(el.target.dataset.add){
        let deph = el.target.getAttribute('data-add');
        let category = el.target.getAttribute('data-cat');
        let block = null;
        if(deph == 1){
            block = el.target.parentNode;
        }else if(deph == 2){
            block = el.target.parentNode.parentNode;
        }else if(deph == 3){
            block = el.target.parentNode.parentNode;
        }
        let h2 = block.querySelector('h2').textContent;
        block.innerHTML = '<h2>'+h2+'</h2><div class="discript"><div class="block">Название услуги</div><div class="block">Цена</div></div>';
        block.innerHTML += '<form action="" class="item" method="POST"><input type="hidden" name="type" value="add_item"><input type="hidden" name="category" value="'+category+'"><input type="text" class="name" name="name" placeholder="Название услуги" value=""><input type="text" class="price" name="price" placeholder="Цена услуги" value=""><button type="submit"></button></form>';
    }
});