//Count how many like buttons we have on site

let buttons = [...document.querySelectorAll('.like-button')]

for (const button of buttons) {
    button.addEventListener('click', function(){
        //Target span next to likebutton
        const likeCount = document.querySelector(`#like-count-${this.dataset.id}`)

        //Take value and add 1 (to give instant feedback)
        let count = likeCount.innerHTML
        likeCount.innerHTML = ++count

        //Create new request
        const request = new XMLHttpRequest()

        //Build json data
        const data = JSON.stringify({
            'id' : this.dataset.id,
            'likes' : 1
        })

        //Send request
        request.open('POST', window.location + '/api/like-reciever.php', true)
        request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8')
        request.send(data)
    });
}