window.addEventListener("load", () => {
    document.getElementsByClassName("render-btn")[0].onclick = e => {
        const r = document.getSelection().getRangeAt(0).cloneRange()

        document.designMode = 'on'

        document.getSelection().addRange(r)

        document.execCommand("hiliteColor", false, "yellow")
        document.execCommand("foreColor", false, "red")

        document.designMode = 'off'

        document.getSelection().empty()
    }
})