function Trim(str, count, endString = '...') {
    let result = ''

    for (let i = 0; i < str.length; i++) {
        if(i < count){
            result += str[i]
        }else{
            result += endString
            break
        }
    }

    return result
}

let carousels = document.querySelectorAll('.slider')
let xCard = 0

if(!mobileCheck()){
    carousels.forEach(carousel => {
        let isClick = false
        let speedMove = 0
        let X
        let card = carousel.children[0]
        let cards = carousel.children
        let min = 0
        let max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth
        let width = 0

        const SavePosXCar = (x) => {
            carousels.forEach(carousel => {
                let cards = carousel.children

                xCard += x

                cards[0].style.marginLeft = xCard + 'px'
            })
        }
        SavePosXCar(0)

        // setWidthCard(cards, carousel)

        for (let i = 0; i < cards.length; i++) {
            let title = $(cards[i]).children().children().next()
            title.text(Trim(title.text(), 20))
        }

        window.addEventListener('resize', function (e) {
            isClick = false
            xCard = 0
            SavePosXCar(0)
            max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth
        })

        window.addEventListener('load', function (e) {
            // carousel.parentElement.style.display = 'block'

            isClick = false
            xCard = 0
            SavePosXCar(0)
            max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth
        })

        carousel.addEventListener('mousedown', function (e) {
            for (let i = 0; i < cards.length; i++) {
                cards[i].style.pointerEvents = 'none'
            }
            document.body.style.cursor = 'draggable'
            SavePosXCar(0)
            isClick = true
            X = e.clientX - card.offsetLeft
            for (let i = 0; i < cards.length; i++) {
                cards[i].style.transition = 'all 0s'
            }
        })


        carousel.addEventListener('mousemove', function (e){
            if(isClick && !mobileCheck()) {
                let left = cards[0].offsetLeft
                speedMove = -(X - (e.clientX - left))
                if(!(min < -xCard && -xCard < max)){
                    if(!(min < -xCard)){
                        if(speedMove < 0){
                            SavePosXCar(speedMove)
                        }
                    }
                    else if(!(-xCard < max) && min < -xCard){
                        if(speedMove > 0){
                            SavePosXCar(speedMove)
                        }
                    }
                }else{
                    SavePosXCar(speedMove)
                }
            }
        })

        document.addEventListener('mouseup', function (e) {
            // Transition set 0 if min < -xCard && -xCard < max:
            if(min < -xCard && -xCard < max){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all .3s'
                }
                let result;
                for (let i = 0; i < cards.length; i++) {
                    if(cards[i].offsetLeft + cards[i].offsetWidth < 0 && !(cards[i].offsetLeft + cards[i].offsetWidth + (cards[i].offsetWidth / 2) < 0)){
                        result = cards[i + 1]
                    }else if(cards[i].offsetLeft + cards[i].offsetWidth + (cards[i].offsetWidth / 2) < 0){
                        result = cards[i + 2]
                    }
                }

                if(result !== undefined){
                    SavePosXCar(-result.offsetLeft)
                }else{
                    xCard = 0
                    SavePosXCar(0)
                }
            }
            else{
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all .3s'
                }
            }

            // If 0 > -xCard do xCard set 0
            if(0 > -xCard){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all .3s'
                }
                xCard = 0
                SavePosXCar(0)
            }
            // ElseIf -xCard > max do xCard set max
            else if(cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth < 0){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all .3s'
                }
                xCard = -max
                SavePosXCar(0)
            }

            for (let i = 0; i < cards.length; i++) {
                cards[i].style.pointerEvents = 'auto'
            }
            isClick = false
        })
    })}

else{
    document.getElementById('carousel-anime').remove()

    carousels.forEach(carousel => {
        let isClick = false
        let speedMove = 0
        let X
        let card = carousel.children[0]
        let cards = carousel.children
        let min = 0
        let max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth

        const SavePosXCar = (x) => {
            carousels.forEach(carousel => {
                let cards = carousel.children

                xCard += x

                cards[0].style.marginLeft = xCard + 'px'
            })
        }

        window.addEventListener('resize', function (e) {
            isClick = false
            xCard = 0
            SavePosXCar(0)
            max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth
        })

        window.addEventListener('load', function (e) {
            isClick = false
            xCard = 0
            SavePosXCar(0)
            max = cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth
        })

        carousel.addEventListener('touchstart', function (e) {
            isClick = true
            X = e.touches[0].pageX - card.offsetLeft
            for (let i = 0; i < cards.length; i++) {
                cards[i].style.transition = 'all 0s'
            }
        })


        carousel.addEventListener('touchmove', function (e){
            if(isClick) {
                let left = cards[0].offsetLeft
                speedMove = -(X - (e.touches[0].pageX - left))
                if(!(min < -xCard && -xCard < max)){
                    if(!(min < -xCard)){
                        if(speedMove < 0){
                            SavePosXCar(speedMove)
                        }
                    }
                    else if(!(-xCard < max) && min < -xCard){
                        if(speedMove > 0){
                            SavePosXCar(speedMove)
                        }
                    }
                }else{
                    SavePosXCar(speedMove)
                }
            }
        })

        document.addEventListener('touchend', function (e) {
            // Transition set 0 if min < -xCard && -xCard < max:
            if(min < -xCard && -xCard < max){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all 1s'
                }
                let result;
                for (let i = 0; i < cards.length; i++) {
                    if(cards[i].offsetLeft + cards[i].offsetWidth < 0 && !(cards[i].offsetLeft + cards[i].offsetWidth + (cards[i].offsetWidth / 2) < 0)){
                        result = cards[i + 1]
                    }else if(cards[i].offsetLeft + cards[i].offsetWidth + (cards[i].offsetWidth / 2) < 0){
                        result = cards[i + 2]
                    }
                }

                if(result !== undefined){
                    SavePosXCar(-result.offsetLeft)
                }else{
                    xCard = 0
                    SavePosXCar(0)
                }
            }
            else{
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all 1s'
                }
            }

            // If 0 > -xCard do xCard set 0
            if(0 > -xCard){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all 1s'
                }
                xCard = 0
                SavePosXCar(0)
            }
            // ElseIf -xCard > max do xCard set max
            else if(cards[cards.length - 1].offsetLeft + cards[cards.length - 1].offsetWidth - carousel.offsetWidth < 0){
                for (let i = 0; i < cards.length; i++) {
                    cards[i].style.transition = 'all 1s'
                }
                xCard = -max
                SavePosXCar(0)
            }

            isClick = false
        })
    })}

