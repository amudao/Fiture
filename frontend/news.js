
function fetchNews(keyword) {

    fetch (
        "https://newsdata.io/api/1/news?apikey=pub_141247fb5e714498242590b3cb4e01b99b4f8&language=en&category=business&q=" + keyword
    )
        .then(function (response) {
            return response.json();
        }).then(function (obj) {
            displayNews(obj)
            displayNews1(obj)
            displayNews2(obj)
            displayNews3(obj)
            displayNews4(obj)
            displayNews5(obj)
            displayNews6(obj)
        });
}
function displayNews (data) {

    const {title} = data.results[0];
    const {description} = data.results[0];
    const {source_id} = data.results[0];
    const {link} = data.results[0];
    const {image_url} = data.results[0];
    //console.log(title, description, author, url, urlToImage);

    document.querySelector(".title").innerText = title;
    document.querySelector(".description").innerText = description;
    document.querySelector(".author").innerText = source_id;
    document.querySelector(".url").href = link;
    document.querySelector(".linkImg").src = image_url;
}

function displayNews1 (data) {

    const {title} = data.results[3];
    const {source_id} = data.results[3];
    const {link} = data.results[3];

    document.querySelector(".smallTitle1").innerText = title;
    document.querySelector(".smallAuthor1").innerText = source_id;
    document.querySelector(".smallUrl1").href = link;
}

function displayNews2 (data) {

    const {title} = data.results[4];
    const {source_id} = data.results[4];
    const {link} = data.results[4];

    document.querySelector(".smallTitle2").innerText = title;
    document.querySelector(".smallAuthor2").innerText = source_id;
    document.querySelector(".smallUrl2").href = link;
}

function displayNews3 (data) {

    const {title} = data.results[5];
    const {source_id} = data.results[5];
    const {link} = data.results[5];

    document.querySelector(".smallTitle3").innerText = title;
    document.querySelector(".smallAuthor3").innerText = source_id;
    document.querySelector(".smallUrl3").href = link;
}

function displayNews4 (data) {

    const {title} = data.results[6];
    const {source_id} = data.results[6];
    const {link} = data.results[6];

    document.querySelector(".smallTitle4").innerText = title;
    document.querySelector(".smallAuthor4").innerText = source_id;
    document.querySelector(".smallUrl4").href = link;
}

function displayNews5 (data) {

    const {title} = data.results[1];
    const {description} = data.results[1];
    const {source_id} = data.results[1];
    const {link} = data.results[1];
    const {image_url} = data.results[1];
    //console.log(title, description, author, url, urlToImage);

    document.querySelector(".lastBigTitle1").innerText = title;
    document.querySelector(".lastBigDescription1").innerText = description;
    document.querySelector(".lastBigAuthor1").innerText = source_id;
    document.querySelector(".lastBigURL1").href = link;
    document.querySelector(".lastBigImg1").src = image_url;
}

function displayNews6 (data) {

    const {title} = data.results[2];
    const {description} = data.results[2];
    const {source_id} = data.results[2];
    const {link} = data.results[2];
    const {image_url} = data.results[2];
    //console.log(title, description, author, url, urlToImage);

    document.querySelector(".lastBigTitle2").innerText = title;
    document.querySelector(".lastBigDescription2").innerText = description;
    document.querySelector(".lastBigAuthor2").innerText = source_id;
    document.querySelector(".lastBigURL2").href = link;
    document.querySelector(".lastBigImg2").src = image_url;
}

function search () {
    this.fetchNews(document.querySelector(".search-bar").value);
}

document.querySelector(".search button")
.addEventListener("click", function () {
search();
});

