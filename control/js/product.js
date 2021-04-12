let form_del = document.getElementById('form_del');
let inp_id = document.getElementById('inp_id');
if(form_del && inp_id){
    document.addEventListener('click', function(el){
        let tg = el.target;
        if(tg.classList.contains('del')){
            let id = tg.dataset.id;
            inp_id.value = id;
            form_del.submit();
        }else if(tg.classList.contains('logo_edit') || tg.classList.contains('logo_edit_text')){
            let photo_block = null;
            if(tg.classList.contains('logo_edit')){
                photo_block = tg.parentNode;
            }else if(tg.classList.contains('logo_edit_text')){
                photo_block = tg.parentNode.parentNode;
            }
            photo_block.innerHTML = '<form method="POST"><p>Изменение фото</p><input type="hidden" name="id" value=""><div class="btn_upload"><input type="file" name="picture" id="inp_ph1"></div><button id="bt_sb1" type="submit" disabled>Файл не выбран</button></form>';
            let inp_ph = document.getElementById('inp_ph1');
            inp_ph.addEventListener('change', function(){
                console.log(this.value);
                let btn_submit = document.getElementById('bt_sb1');
                if(this.value){
                    btn_submit.textContent = 'Загрузить';
                    btn_submit.disabled = false;
                }else{
                    btn_submit.textContent = 'Файл не выбран';
                    btn_submit.disabled = true; 
                }
            });
        }
    });
}

