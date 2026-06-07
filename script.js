function displayComment() {
    // 1. Grab the text from the input box
    let typedText = document.getElementById("userInput").value;
    
    // 2. Put that text inside our empty output paragraph on screen
    document.getElementById("commentOutput").innerText = "You typed: " + typedText;
}
