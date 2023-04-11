let btnChat = document.getElementById("chatBar");
btnChat.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        event.preventDefault()
        addChat()
    }
})

function addChat() {
    let ch = document.getElementById("chatBar").value;
    let cont = document.getElementById("chatContainer");
    let newCh = document.createElement("li");

    newCh.appendChild(document.createTextNode("Anda : " + ch));
    cont.appendChild(newCh);
}