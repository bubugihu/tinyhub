@extends('users.layout.layout')
@section('title', 'brands')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Brands</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<section class="brand py-5">
    <div class="container">
        <!-- Brand 1 -->
        <div class="row py-5">
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/beats-logo.png")}}" width="100%" alt=""></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">BEATS</h1>
                <p style="text-align: justify;">Beats Electronics LLC (also known as Beats by Dr. Dre, or simply Beats by Dre) is a subsidiary of Apple Inc. that produces audio products. Headquartered in Culver City, California, the company was founded by music producer and rapper Dr. Dre and Interscope Records co-founder Jimmy Iovine.
                The subsidiary's product line is primarily focused on headphones and speakers. The company's original product line was manufactured in partnership with the AV equipment company Monster Cable Products. Following the end of its contract with the company, Beats took further development of its products in-house. In 2014, the company expanded into the online music market with the launch of a subscription-based streaming service, Beats Music.</p>
            </div>
        </div>
        <!-- End Brand 1 -->
        <!-- Brand 2 -->
        <div class="row py-5">
            <div class="col-md-8">
                <h1 class="text-uppercase">SONY</h1>
                <p style="text-align: justify;">Sony Corporation (ソニー株式会社, Sonī Kabushiki Kaisha, /ˈsoʊni/ SOH-nee, commonly known as Sony and stylized as SONY) is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo. Its diversified business includes consumer and professional electronics, semiconductors, gaming, entertainment and financial services. The company owns the largest music entertainment business in the world, the largest video game console business and one of the largest video game publishing businesses, and is one of the leading manufacturers of electronic products for the consumer and professional markets, and a leading player in the film and television entertainment industry. Sony was ranked 97th on the 2018 Fortune Global 500 lis</p>
            </div>
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/sony-logo.png")}}" width="100%" alt=""></div>
        </div>
        <!-- End Brand 2 -->
        <!-- Brand 3 -->
        <div class="row py-5">
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/bando.png")}}" width="100%" alt=""></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Bang & Olufsen</h1>
                <p style="text-align: justify;">Bang & Olufsen (B&O) (stylized as BANG & OLUFSEN) is a high end luxury Danish consumer electronics company that designs and manufactures audio products, television sets, and telephones. It was founded in 1925 by Peter Bang and Svend Olufsen, who designed a radio to work with alternating current, a product of significance at a time when most radios were still running on batteries.

                    In May 2015, HARMAN International Industries (which later became a subsidiary of Samsung), announced the completion of its acquisition of Bang & Olufsen Automotive car audio business. In March 2017, Tymphany, an audio ODM based in Hong Kong and with manufacturing operations in Dongchen, announced the acquisition of the engineering and manufacturing operation in the Czech Republic from Bang & Olufsen</p>
            </div>
        </div>
        <!-- End Brand 3 -->
        <!-- Brand 4 -->
        <div class="row py-5">
            <div class="col-md-8">
                <h1 class="text-uppercase">JBL</h1>
                <p style="text-align: justify;">JBL is an American company that manufactures audio equipment, including loudspeakers and headphones. There are two independent divisions within the company; JBL Consumer produces audio equipment for the consumer home market, while the JBL Professional produces professional equipment for the studio, installed sound, tour sound, portable sound (production and DJ), and cinema markets. JBL is owned by Harman International Industries, a subsidiary of South Korean company Samsung Electronics.
                    JBL was founded by James Bullough Lansing (1902–1949) who was an American audio engineer and loudspeaker designer most notable for establishing two audio companies that bear his name, Altec Lansing and JBL, the latter taken from his initials.</p>
            </div>
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/jbl-logo.png")}}" width="100%" alt=""></div>
        </div>
        <!-- End Brand 4 -->
        <!-- Brand 5 -->
        <div class="row py-5">
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/westone-logo.jpeg")}}" width="100%" alt=""></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Westone</h1>
                <p style="text-align: justify;">Established in 1959, Westone Laboratories has more than 55 years of experience delivering premium in-ear solutions for critical listening applications. Westone is the largest manufacturer of custom ear pieces in the world and was the first to design and manufacture a balanced armature driver earphone. With hearing healthcare and music specialists on our research and production teams, Westone invented the most ergonomic monitor design which provides the most comfortable, best fitting and quietest earphones on the market. The largest names in music turn to Westone in-ear monitors for on-stage use, just as U.S. Air Force fighter pilots depend on Westone’s ACCES® in-ear communications system for mission-critical noise isolation, hearing protection and two-way communication. It is our experience, our products, and our people that make Westone The In-Ear Experts®.</p>
            </div>
        </div>
        <!-- End Brand 5 -->
    </div>
</section>
@endsection