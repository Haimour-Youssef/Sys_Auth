<?php
use authentification\Verification;
require_once 'assets/php/Verification.php';

$ver =new Verification();
if (isset($_COOKIE["token"])) {
  if(!$ver->auth($_COOKIE["token"])){
    header("Location: login.php");
    die();
  }
}else{
  header("Location: login.php");
  die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: black;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-weight: 500;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .title {
      color: mintcream;
      text-transform: uppercase;
      margin-top: 3em;
      margin-bottom: 3em;
      font-size: 1em;
      letter-spacing: 0.3em;
    }

    .keyboard {
      display: flex;
      flex-direction: column;
    }

    .row {
      list-style: none;
      display: flex;
    }

    li {
      height: 3em;
      width: 3em;
      color: rgba(0, 0, 0, 0.7);
      border-radius: 0.4em;
      line-height: 3em;
      letter-spacing: 1px;
      margin: 0.4em;
      transition: 0.3s;
      text-align: center;
      font-size: 1em;
    }

    #tab {
      width: 5em;
    }

    #caps {
      width: 6em;
    }

    #left-shift {
      width: 8em;
    }

    #enter {
      width: 6em;
    }

    #right-shift {
      width: 8em;
    }

    #back {
      width: 5em;
    }

    .pinky {
      background-color: crimson;
      border: 2px solid crimson;
    }

    .pinky.selected {
      color: crimson;
    }

    .ring {
      background-color: coral;
      border: 2px solid coral;
    }

    .ring.selected {
      color: coral;
    }

    .middle {
      background-color: darkorange;
      border: 2px solid darkorange;
    }

    .middle.selected {
      color: darkorange;
    }

    .pointer1st {
      background-color: gold;
      border: 2px solid gold;
    }

    .pointer1st.selected {
      color: gold;
    }

    .pointer2nd {
      background-color: khaki;
      border: 2px solid khaki;
    }

    .pointer2nd.selected {
      color: khaki;
    }

    .fill-out-key {
      background-color: slategrey;
      border: 2px solid slategrey;
    }

    .selected {
      background-color: transparent;
      -webkit-animation: vibrate-1 0.3s linear infinite both;
      animation: vibrate-1 0.3s linear infinite both;
    }

    /* ----------------------------------------------
 * Generated by Animista
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    .hit {
      -webkit-animation: hit 0.3s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
      animation: hit 0.3s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
    }

    @-webkit-keyframes hit {
      0% {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes hit {
      0% {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes vibrate-1 {
      0% {
        -webkit-transform: translate(0);
        transform: translate(0);
      }

      20% {
        -webkit-transform: translate(-2px, 2px);
        transform: translate(-2px, 2px);
      }

      40% {
        -webkit-transform: translate(-2px, -2px);
        transform: translate(-2px, -2px);
      }

      60% {
        -webkit-transform: translate(2px, 2px);
        transform: translate(2px, 2px);
      }

      80% {
        -webkit-transform: translate(2px, -2px);
        transform: translate(2px, -2px);
      }

      100% {
        -webkit-transform: translate(0);
        transform: translate(0);
      }
    }

    @keyframes vibrate-1 {
      0% {
        -webkit-transform: translate(0);
        transform: translate(0);
      }

      20% {
        -webkit-transform: translate(-2px, 2px);
        transform: translate(-2px, 2px);
      }

      40% {
        -webkit-transform: translate(-2px, -2px);
        transform: translate(-2px, -2px);
      }

      60% {
        -webkit-transform: translate(2px, 2px);
        transform: translate(2px, 2px);
      }

      80% {
        -webkit-transform: translate(2px, -2px);
        transform: translate(2px, -2px);
      }

      100% {
        -webkit-transform: translate(0);
        transform: translate(0);
      }
    }
  </style>
</head>

<body>
  <h1 class="title">Eyes on the screen</h1>
  <div class="keyboard">
    <ul class="row row-0">
      <li class="pinky" id="esc">ESC</li>
      <li class="pinky" id="1">1</li>
      <li class="ring" id="2">2</li>
      <li class="middle" id="3">3</li>
      <li class="pointer1st" id="4">4</li>
      <li class="pointer2nd" id="5">5</li>
      <li class="pointer2nd" id="6">6</li>
      <li class="pointer1st" id="7">7</li>
      <li class="middle" id="8">8</li>
      <li class="ring" id="9">9</li>
      <li class="pinky" id="10">0</li>
      <li class="pinky">-</li>
      <li class="pinky">+</li>
      <li class="pinky" id="back">BACK</li>
    </ul>
    <ul class="row row-1">
      <li class="pinky" id="tab">TAB</li>
      <li class="pinky" id="Q">Q</li>
      <li class="ring" id="W">W</li>
      <li class="middle" id="E">E</li>
      <li class="pointer1st" id="R">R</li>
      <li class="pointer2nd" id="T">T</li>
      <li class="pointer2nd" id="Y">Y</li>
      <li class="pointer1st" id="U">U</li>
      <li class="middle" id="I">I</li>
      <li class="ring" id="O">O</li>
      <li class="pinky" id="P">P</li>
      <li class="pinky">[</li>
      <li class="pinky">]</li>
      <li class="pinky">\</li>
    </ul>
    <ul class="row row-2">
      <li class="pinky" id="caps">CAPS</li>
      <li class="pinky" id="A">A</li>
      <li class="ring" id="S">S</li>
      <li class="middle" id="D">D</li>
      <li class="pointer1st" id="F">F</li>
      <li class="pointer2nd" id="G">G</li>
      <li class="pointer2nd" id="H">H</li>
      <li class="pointer1st" id="J">J</li>
      <li class="middle" id="K">K</li>
      <li class="ring" id="L">L</li>
      <li class="pinky">:</li>
      <li class="pinky">''</li>
      <li class="pinky" id="enter">ENTER</li>
    </ul>
    <ul class="row row-3">
      <li class="pinky" id="left-shift">SHIFT</li>
      <li class="pinky" id="Z">Z</li>
      <li class="ring" id="X">X</li>
      <li class="middle" id="C">C</li>
      <li class="pointer1st" id="V">V</li>
      <li class="pointer2nd" id="B">B</li>
      <li class="pointer2nd" id="N">N</li>
      <li class="pointer1st" id="M">M</li>
      <li class="middle">,</li>
      <li class="ring">.</li>
      <li class="pinky">;</li>
      <li class="pinky" id="right-shift">SHIFT</li>
    </ul>
  </div>
  <h1 class="title">Hands on the keyboard</h1>
  <script>
    const keys = [..."ABCDEFGHIJKLMNOPQRSTUVWXYZ"];

    const timestamps = [];

    timestamps.unshift(getTimestamp());

    function getRandomNumber(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function getRandomKey() {
      return keys[getRandomNumber(0, keys.length - 1)]
    }

    function targetRandomKey() {
      const key = document.getElementById(getRandomKey());
      key.classList.add("selected");
      let start = Date.now()
    }

    function getTimestamp() {
      return Math.floor(Date.now() / 1000)
    }

    document.addEventListener("keyup", event => {
      const keyPressed = String.fromCharCode(event.keyCode);
      const keyElement = document.getElementById(keyPressed);
      const highlightedKey = document.querySelector(".selected");

      keyElement.classList.add("hit")
      keyElement.addEventListener('animationend', () => {
        keyElement.classList.remove("hit")
      })

      if (keyPressed === highlightedKey.innerHTML) {
        timestamps.unshift(getTimestamp());
        const elapsedTime = timestamps[0] - timestamps[1];
        console.log(`Character per minute ${60 / elapsedTime}`)
        highlightedKey.classList.remove("selected");
        targetRandomKey();
      }
    })

    targetRandomKey();
  </script>
</body>

</html>