fetch('header.html')
    .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
});

function changeSize1(x)
{
    x.style.color = "black";
    x.style.backgroundColor = "white";

}

function changeSize2(x)
{
    x.style.color = "white";
    x.style.backgroundColor = "black";
}

