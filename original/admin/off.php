<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h1><strong>Meet The Boad Members</strong></h1>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/abcd.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Manish Kumar Yadav</h2>
        <p class="title">CEO & Founder</p>
        <p>manish@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/abc1.jpg" alt="Mike" style="width:43%">
      <div class="container">
        <h2>Kumar Shannu</h2>
        <p class="title">Managing Director</p>
        <p>shaanu@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="images/abc2.jpg" alt="John" style="width:38%">
      <div class="container">
        <h2>Gourav Ranjan</h2>
        <p class="title">CTO</p>
        <p>gaurav@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>


