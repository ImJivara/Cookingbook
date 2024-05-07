<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* ----- Designed by @Rachit-Pal ----- */

:root {
    --u: 1.5vmin;
    --clr: #777;
    --bg: #444857;
}
body {
    margin: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
 
}

.button {
    position: relative;
    width: calc(var(--u) * 10);
    height: calc(var(--u) * 10);
}

input { display: none; }    

label {
    background: var(--bg);
    width: 100%;
    height: 100%;
    position: absolute;
    border-radius: calc(var(--u) * 1.5);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

label:before {
    content: "49";
    position: absolute;
    min-width: 50%;
    left: 25%;
    text-align: center;
    top: 0;
    bottom: 0;
    background: var(--bg);
    border-radius: calc(var(--u) * 2);
    font-size: calc(var(--u) * 2);
    font-family: Arial, Helvetica, serif;
    padding: calc(var(--u) * 0.5);
    box-sizing: border-box;
    color: var(--clr);
    line-height: calc(var(--u) * 2.25);
    z-index: -1;
    transition: all 0.5s ease 0s;
    animation: counter-bot 1s ease 0s;
}

input:checked + label:before {
    content: "50";
    color: #fff;
    background: #ff3c41; 
    
    bottom: inherit;
    transition: all 0.5s ease 0s;
    animation: counter-top 1s ease 0s;
}

@keyframes counter-top {
    70% { top: calc(var(--u) * -4.75); }
}

@keyframes counter-bot {
    70% { 
        top: inherit; 
        bottom: calc(var(--u) * -5); 
    }
}


label:after {    
    content: "";
    width: calc(var(--u) * 8);
    height: calc(var(--u) * 8);
    position: absolute;
    border-radius: 100%;
    box-sizing: border-box;
    z-index: -2;
    animation: disc-gray 1s ease 0s, spin-gray 0.65s ease-in-out 0.25s;
    transform: rotate(0deg);
    --pos: 95%;
    background: 
        radial-gradient(circle at 50% 50%, #fff0 0 62%, var(--bg) 63% 65%, #fff0 66% 100%), 
        radial-gradient(circle at 50% var(--pos), var(--bg) 0 4%, #fff0 4.5% 100%);
}

@keyframes spin-gray {
    100% {
        transform: rotate(-360deg);
    }
}

@keyframes spin-red {
    100% {
        transform: rotate(360deg);
    }
}

@keyframes disc-gray {
    70% {
        width: calc(var(--u) * 19);
        height: calc(var(--u) * 19);
    }
}

@keyframes disc-red {
    70% {
        width: calc(var(--u) * 19);
        height: calc(var(--u) * 19);
    }
}

input:checked + label:after {
    --bg: #ff3c41;
    --pos: 5%;
    animation: disc-red 1s ease 0s, spin-red 0.65s ease-in-out 0.25s;
}






label span {
    position: absolute;
    width: 100%;
    height: 100%;
    animation: dislike 0.5s ease 0s;
}
/*
label span:before {
    content: "";
    width: 2px;
    height: 2px;
    position: absolute;
    border-radius: calc(var(--u) * 5);
    transform: translate(calc(var(--u) * 2.235), calc(var(--u) * 4.5));
    border: calc(var(--u) * 2.71) solid transparent;
    border-top: calc(var(--u) * 2.9) solid var(--clr);
}

label span:after {
    content: "";
    background: 
        radial-gradient(circle at 40% 45%, var(--clr) 0 calc(var(--u) * 1.25), #fff0 calc(var(--u) * 1.325) 100%), 
        radial-gradient(circle at 60% 45%, var(--clr) 0 calc(var(--u) * 1.25), #fff0 calc(var(--u) * 1.325) 100%);
    width: 100%;
    height: 100%;
    position: absolute;
}
*/
label span:before {
    content: "";
    position: absolute;
    border-radius: 0.25vmin;
    border: 3.6vmin solid #fff0;
    border-top: 4vmin solid var(--clr);
    margin-top: 7.65vmin;
    margin-left: 4vmin;
}

label span:after {
    content: "";
    position: absolute;
    background: var(--clr);
    width: 5vmin;
    height: 5vmin;
    border-radius: 100%;
    margin-left: 3.35vmin;
    margin-top: 3.5vmin;
    box-shadow: 3.5vmin 0 0 0 var(--clr);
}

input:checked + label span {
    --clr: #ff3c41; 
    animation: like 0.5s ease 0s;
}


@keyframes like {
    75% { transform: scale(1.25); }
}
@keyframes dislike {
    75% { transform: scale(0.75); }
}

.button:hover label span:before, .button:hover label span:after {
    --clr: #9d4958;
}

.button:hover input:checked + label span:before, .button:hover input:checked + label span:after {
    --clr: #ff3c41; 
}
    </style>
</head>
<body>
    <div class="button">
        <input type="checkbox" id="liked"><label for="liked"><span></span></label>
    </div>
</body>
</html>