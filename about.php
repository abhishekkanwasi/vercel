<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
  <title>About Us - The Trekker</title>
  <!-- External CSS and slider libraries -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="src/img/Favicon.png" type="image/x-icon" />
  <link rel="apple-touch-icon" type="image/x-icon" href="src/img/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="src/img/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="src/img/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="src/img/apple-touch-icon-144x144-precomposed.png" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/Main.css" type="text/css" />
  <link rel="stylesheet" href="css/footer.css" type="text/css" />
  <link rel="stylesheet" href="css/header.css" type="text/css" />
  <link rel="stylesheet" href="css/new-Main.css" type="text/css" />
  <link rel="stylesheet" href="css/trekking.css" type="text/css" />
  
  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="js/anime.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <style>
    .outer-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 20vh;
      background: linear-gradient(to right, #ff4500, #e03e00); /* Red gradient */
    }

    .banner-container {
      width: 100%;
      height: 100%; /* Full height of the container */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-title {
      color: white;
      font-size: 3rem;
      font-weight: bold;
      text-align: center;
      letter-spacing: 2px;
    }

    .container-about {
      display: flex;
      justify-content: space-between;
      max-width: 1100px;
      width: 100%;
      flex-wrap: wrap;
      margin-top: 25px;
    }

    .about-text-card {
      width: 100%;
      background: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 15px;
    }

    .about-details-card {
      width: 100%;
      background: #fff;
      border: none;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 15px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      height: fit-content;
    }

    .card-header {
      background: #ff4500;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 1.25rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .card-body {
      padding: 20px;
    }

    .about-details {
      margin-top: 20px;
    }

    .about-details i {
      color: #ff4500;
      margin-right: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .about-text-card {
        width: 100%;
        margin-bottom: 20px;
      }

      .about-details-card {
        width: 100%;
      }
    }

    /* Add padding for smaller screens */
    @media screen and (max-width: 768px) {
      .container {
        padding: 35px;
      }
    }

  </style>
</head>

<body>
  <?php include_once("header.php"); ?>
  
  <!-- Gradient background with title -->


  <div class="container container-about">
      
    <div class="about-text-card">
          <div class="outer-container">
    <div class="banner-container">
      <div class="about-title">About Us</div>
    </div>
  </div>
   
      <div class="card-body">
        <p>Since the year 2000, Himalaya Yatri has been a name synonymous with adventure, exploration, and spiritual journeys. What began as a small trekking expedition service has now flourished into a trusted and experienced travel companion. Over the past 25 years, we have dedicated ourselves to providing travelers with unmatched trekking experiences in the heart of the Himalayas. Our journey started with offline services, where we built deep connections with our clients and perfected the art of curating unforgettable experiences. As we progressed, we expanded our expertise to cater to the Char Dham Yatra, bringing a spiritual dimension to our offerings. Now, as we enter 2025, we have embraced the digital era, transitioning into an online service to reach a wider audience while maintaining the same commitment, passion, and personalized service that have been our foundation since the beginning.</p>
        <hr/>
        <p><b>Why Himalaya Yatri?</b></p>
        <p>Choosing Himalaya Yatri means choosing an experience enriched by decades of expertise, local knowledge, and an unwavering commitment to customer satisfaction. With 25 years in the trekking business, we have built a reputation for excellence in adventure travel. Our deep understanding of the Himalayan terrain allows us to craft trekking experiences that are both thrilling and safe. In the past three years, we have expanded into organizing the Char Dham Yatra, ensuring pilgrims experience seamless and spiritually uplifting journeys. Our transition from offline to online services enables us to connect with travelers worldwide, making it easier for them to plan and embark on their dream expeditions with just a few clicks. Whether it’s an adventurous trek or a sacred pilgrimage, we provide personalized service, expert guidance, and 24/7 support to ensure an unforgettable experience.</p>
          <hr/>
          <p><b>Our Core Values</b></p>
          <p>At Himalaya Yatri, we operate on a foundation of values that define our every action and decision. Our commitment to safety ensures that every trekker and pilgrim experiences their journey with confidence and security. Authenticity is at the heart of what we do—we strive to provide real, immersive experiences that allow travelers to connect with the Himalayas on a deeper level. We also emphasize sustainability, ensuring that our operations respect and preserve the pristine beauty of the mountains. With our 25 years of experience, we uphold a tradition of excellence and reliability, making us a trusted name in the industry. Our dedication to customer satisfaction drives us to deliver personalized services that cater to every traveler's unique needs. Above all, we believe in integrity and trust, values that have made us a leading name in Himalayan travel for over two decades.</p>
          <p>Additionally, we are deeply committed to supporting local communities. By collaborating with regional guides, accommodation providers, and transport services, we contribute to the local economy and promote sustainable tourism. We also engage in responsible trekking practices, ensuring that the pristine landscapes we explore remain unspoiled for future generations.</p>
           <hr/>
          
          <p><b>Our Trekking Expeditions</b></p>
          <p>Himalaya Yatri specializes in a variety of trekking expeditions tailored for adventure seekers of all levels. From beginner-friendly trails to challenging high-altitude routes, we ensure that every trek is filled with breathtaking landscapes, cultural interactions, and safe, well-planned itineraries. Some of our most sought-after treks include Bali Pass Trek, Borasu Pass Trek, Valley of Flowers, and Kedarkantha Trek etc. Each of our treks is led by expert guides who ensure safety while enriching the experience with local insights and knowledge.</p>
          <hr/>
          <p><b>Our Char Dham Yatra Expeditions</b></p>
          <p>For the past three years, we have been curating divine journeys to the sacred Char Dham Yatra- Badrinath, Kedarnath, Gangotri and Yamunotri. These pilgrimages hold immense religious significance and attract devotees from across the world. At Himalaya Yatri, we provide comprehensive travel solutions, including comfortable accommodations, guided temple visits, and smooth transportation, ensuring that every pilgrim enjoys a peaceful and fulfilling experience.</p>
          <hr/>
          <p><b>Customization Packages</b></p>
          <p>At Himalaya Yatri, we understand that every traveler has unique preferences and requirements. That’s why we offer customized travel packages tailored to individual needs. Whether you’re looking for a private trekking expedition, a family pilgrimage, a corporate retreat, or a photography-focused Himalayan tour, we create bespoke itineraries that align with your interests. Our customization options include choosing preferred destinations, accommodation types, travel dates, special assistance services, and adventure activities. By offering personalized journeys, we ensure that each traveler experiences the Himalayas in a way that resonates with their dreams and expectations.</p>
          <hr/>
          <p><b>Our Impact & Community Engagement</b></p>
          <p>At Himalaya Yatri, we believe in giving back to the community and preserving the natural beauty of the Himalayas. We actively support local economies by employing local guides, porters, and homestay providers, ensuring that tourism directly benefits Himalayan communities. Additionally, we participate in eco-tourism initiatives, such as waste management programs, tree-planting drives, and educating travelers about responsible tourism practices. Our goal is to ensure that the Himalayas remain unspoiled for future generations while also uplifting the communities that call these mountains home.</p>
           <hr/>
           <p><b>Future Vision & Expansion Plans</b></p>
           <p>Looking ahead, Himalaya Yatri aims to expand its offerings by introducing new trekking routes, eco-friendly tourism initiatives, and digital enhancements. Our upcoming projects include virtual trekking experiences, improved online booking platforms, and collaborations with international adventure travel organizations. We also plan to develop exclusive Himalayan wellness retreats, combining yoga, meditation, and trekking for a holistic travel experience. As we continue to grow, our vision remains the same - to offer safe, sustainable, and unforgettable Himalayan journeys to adventure seekers and spiritual travelers worldwide.</p>
      </div>
    </div>

    <div class="about-details-card">
      <div class="card-header">Our Team and Facilities</div>
      <div class="card-body about-details">
       <p>Our team is the backbone of Himalaya Yatri, comprising experienced guides, travel experts, and support staff who are passionate about making every journey exceptional. Each team member is well-trained in first aid, high-altitude safety, and emergency protocols to ensure a safe and seamless experience. Our guides are not just professionals; they are storytellers, cultural ambassadors, and experienced mountaineers who bring the Himalayas to life for every traveler.</p>
       <p>We also take pride in offering top-notch facilities, including well-equipped base camps, comfortable accommodations, and reliable transportation. Our trekking and pilgrimage packages come with carefully curated itineraries, ensuring that every aspect of the journey—from lodging and meals to permits and safety measures—is meticulously planned. Whether you're embarking on a thrilling adventure or a spiritual retreat, our team and facilities are here to provide you with an unparalleled Himalayan experience. Our move from offline to online services ensures that you receive real-time support, easy bookings, and hassle-free travel planning, making your journey with us more convenient than ever.</p>
       <p>Furthermore, we continuously strive to enhance our services by integrating modern technology, offering GPS-based tracking, digital travel guides, and live customer support. This ensures that every journey with Himalaya Yatri is not only memorable but also seamlessly organized with the best resources available in the industry.</p>
       <hr/>
       <p><b>Join Us for an Unforgettable Experience</b></p>
       <p>Whether you are looking for an exhilarating trekking adventure, a peaceful spiritual journey, or a customized Himalayan travel experience, Himalaya Yatri is here to make your dreams a reality. With 25 years of expertise, we continue to uphold our promise of safety, authenticity, and unparalleled customer service. Explore the majestic Himalayas with us and create memories that last a lifetime.</p>
       
      </div>
    </div>
  </div>

  <?php include_once("footer.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
