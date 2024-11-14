<x-app-layout>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "League Spartan", sans-serif;
        }  
        #hero {
        background-image: url(https://th.bing.com/th/id/OIP.EPNNa5m6VV5DCBj8HUumWwHaEO?rs=1&pid=ImgDetMain);
        width: 100%;
        height: 100vh;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 0 80px;
        }

        #hero h4 {
        padding-bottom: 15px;
        font-size: 40px;
        }
        #hero h2{
        font-size: 70px;

        }
        #hero h1 {
        color: #088178;
        font-size: 70px;

        }
        #hero button {
        background-color: transparent;
        background-image: url(images/button.png);
        background-repeat: no-repeat;
        background-size: cover;
        width: 260px;
        height: 60px;
        border: 0;
        cursor: pointer;
        font-size: 20px;
        font-weight: 700;
        color: #088178;
        padding: 14px 65px 14px 65px;
        }


        #banners {
        margin: 0 60px;
        }
        #banners h2,
        h4,
        span {
        color: rgb(248, 248, 248);
        }
        #banners .big-banners {
        display: flex;
        align-items: center;
        justify-content: center;
        }
        #banners .big-banners div {
        min-width: 598px;
        margin: 15px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 25px;
        background-size: cover;
        backdrop-filter: blur(8%);
        }
        #banners .big-banners button {
        margin-top: 20px;
        padding: 12px 20px;
        font-size: 16px;
        font-weight: 500;
        background-color: transparent;
        color: rgb(248, 248, 248);
        border: 1px solid rgb(248, 248, 248);
        cursor: pointer;
        transition: 0.3s ease;
        }
        #banners .big-banners div:hover button {
        background-color: #088178;
        border: 1px solid #088178;
        }
        #banners .big-banners-1 {
        background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
        }
        #banners .big-banners-2 {
        background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
        }
        #banners .small-banners-1 {
        background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
        }
        #banners .small-banners-2 {
        background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
        }
        #banners .small-banners-3 {
        background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
        }
        #banners .small-banners {
        display: flex;
        align-items: center;
        justify-content: center;
        }
        #banners .small-banners div {
        min-width: 370px;
        height: 200px;
        margin: 15px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 25px;
        background-size: cover;
        }
        #banners .small-banners h2 {
        font-size: 25px;
        }
        #banners .small-banners h5 {
        color: #771818;
        }

        
    </style>

    

    
    <section id="banners" class="section-p1">
        <div class="big-banners">
          <div class="big-banners-1">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at coro</span>
            <button class="banner-btn">Learn More</button>
          </div>
          <div class="big-banners-2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="banner-btn">Collection</button>
          </div>
        </div>
        <div class="small-banners">
          <div class="small-banners-1">
            <h2>SEASONAL SALE</h2>
            <h5>Winter Collection 50% Off</h5>
          </div>
          <div class="small-banners-2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h5>Spring/Summer 2022</h5>
          </div>
          <div class="small-banners-3">
            <h2>T-SHIRTS</h2>
            <h5>New Trendy Prints</h4>
          </div>
        </div>
      </section>
</x-app-layout>
