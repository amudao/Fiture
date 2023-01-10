

function fetchData(keyword) {

    fetch (
        "https://api.twelvedata.com/quote?symbol=" + keyword + "&apikey=313c15b5d80949469209445de12c143f"
    )
        .then(function (response) {
            return response.json();
        }).then(function (obj) {
            displayData(obj)
        });
}

function fetchDataOrig() {

    fetch (
        "https://api.twelvedata.com/quote?symbol=AAPL&apikey=313c15b5d80949469209445de12c143f"
    )
        .then(function (response) {
            return response.json();
        }).then(function (obj) {
            displayData(obj)
        });
}
function fetchPrice(keyword) {
    fetch (
        "https://api.twelvedata.com/price?symbol=" + keyword + "&apikey=313c15b5d80949469209445de12c143f"
    )
        .then(function (response) {
            return response.json();
        }).then(function (obj) {
            displayPrice(obj)
        });
}

function fetchPriceOrig() {
    fetch (
        "https://api.twelvedata.com/price?symbol=AAPL&apikey=313c15b5d80949469209445de12c143f"
    )
        .then(function (response) {
            return response.json();
        }).then(function (obj) {
            displayPrice(obj)
        });
}

function displayPrice (data) {
    const {price} = data;
    console.log (price);
    document.querySelector(".price").innerText = price;
    document.getElementById("inputFieldPrice").value = price;
}

function displayData (data) {

    const {symbol} = data;
    const {name} = data;
    const {currency} = data;
    const {open} = data;
    const {high} = data;
    const {low} = data;
    const {close} = data;
    //const {previous_close} = data;
    const {change} = data;
    const {percent_change} = data;
    console.log(name, symbol, open, high, low, close);

    document.querySelector(".symbol").innerText = symbol;
    document.getElementById("inputFieldSymbol").value = symbol;
    document.querySelector(".name").innerText = name;
    document.getElementById("inputFieldName").value = name;
    document.querySelector(".currency").innerText = currency;
    document.querySelector(".open").innerText = "Open: " + open;
    document.querySelector(".high").innerText = "Today's high: " + high;
    document.querySelector(".low").innerText = "Today's low: " + low;
    document.querySelector(".end").innerText = "Close: " + close;
    //document.querySelector(".previous_close").innerText = "Yesterday's close: " + previous_close;
    document.querySelector(".change").innerText = "Closing difference: $" + change;
    document.querySelector(".percent_change").innerText = "Change Indicator: %" + percent_change;
}

function search () {
    this.fetchData(document.querySelector(".search-bar").value);
    //console.log(document.querySelector(".search-bar").value);
    this.fetchPrice(document.querySelector(".search-bar").value);
}

document.querySelector(".search button")
.addEventListener("click", function () {
search();
});