let queryInputList = document.getElementById('search-list')

queryInputList.addEventListener('input', function (e) {
    let text = this.value

    $.ajax({
        url: '/ajax/slider_list.php',
        method: 'post',
        dataType: 'html',
        data: {text: text},
        success: function(data){
            console.log(data);
        }
    });
})