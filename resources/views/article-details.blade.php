@extends('layout.index')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-5">Twin Tower Union Square Begin to be Built in Harbour Bay, thw Highest Sky
                        Garden
                        in Batam</h1>
                    <p class="text-center mt-5">Tribun Batam | 02 October 2022</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        {{-- <div class="container-sm"> --}}
        <div class="row">
            <div class="col ms-3 me-3">
                <img src="/profile/assets/images/articles.png" alt="">
                <p class="ms-4 me-4 mt-5">The latest property project from PT Citra Buana Prakarsa, Union Square Office and
                    Residences Twin Tower, is under construction.
                    This development process was marked by a groundbreaking ceremony carried out by the commissioners,
                    directors and management of PT Citra Buana Prakarsa, at the project site, namely the Harbor Bay Downtown
                    area, Batu Ampar, Batam City , Saturday (1/10/2022 ).
                    Union Square is a 37-floor twin tower property project dedicated for offices (Union Tower) and
                    residential (Union Residences). Coming with the tagline "Where Luxury Living Reaches New Heights", Union
                    Square presents Sky Lounge facilities on the rooftop floor, as well as the highest Sky Garden in Batam
                    City , where residents can see 360⁰ views of Batam City and Singapore.
                    Main Director of PT Citra Buana Prakarsa, Jimmi Ho, explained, the construction of Union Square is one
                    of the master plans in 2022 which can not only increase the prestige of the Harbor Bay area , but also
                    Batam City as a whole.
                    Apart from covering residential and office functions with premium facilities and the latest
                    technological features, Union Square, which was built in an area of ​​5,700 square meters, also has a
                    commercial function with business space.
                    "Apart from creating a new, sustainable community going forward, the Union Square project can also
                    create new jobs. The project is planned to be completed in 2025, but we are optimistic that we can
                    complete it a year sooner," explained Jimmi Ho, in his remarks.
                    Union Square's design is designed with a luxurious architectural appearance dominated by glass panels to
                    depict modern office and residential concepts, as well as wood panels in the residence, to create a warm
                    and homey impression.
                    The Union Tower office building itself was built according to standard office tower grade A
                    specifications, in which modern concepts are supported by the latest facilities, and the total area
                    reaches 12,000 square meters.
                    Union Tower office units can be rented or owned in the form of plots up to entire floors, and are very
                    suitable for developing businesses, especially start-ups.

                    Meanwhile, Union Residences offers five types of apartment or condominium options, namely Studio, 1
                    Bedroom, 2 Bedroom, 3 Bedroom and 4 Bedroom types.
                    This residence can accommodate the needs of young executives to modern families with a variety of family
                    members.
                    This twin tower building, 137 meters above sea level, has the best supporting facilities such as a
                    swimming pool, fitness center and a large children's play area on the 8th floor.
                    Complementing these facilities, there is also a six-floor podium that functions as a vehicle parking
                    area.
                    Then, there is also retail space covering a total of 3,900 square meters on the lobby floor, which is
                    filled with various businesses to meet residents' daily needs.
                    The project location which is in Harbor Bay Downtown also provides its own added value, where all
                    conveniences and facilities can be reached easily.
                    This area has the Bayfront Mall shopping center, Domestic and International Ferry Terminal (Harbor Bay
                    Ferry Terminal), The Promenade, as well as culinary and entertainment areas, all of which can be reached
                    just by walking from Union Square.
                    Sales of Union Square residential and office units will soon be launched on October 10, 2022.
                    Potential buyers who are interested can immediately attend the launching event at the Marriott Hotel
                    Harbor Bay , Batam . Buyers also have the opportunity to take home the grand prize of a Maserati
                    Quattroporte GranLusso car.
                </p>
            </div>
        </div>
        {{-- </div> --}}
    </div>

    <div class="section">
        <div class="form-contact" style="background: rgb(205, 118, 69, 5%);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="/profile/assets/images/US-Logo.png" alt="">
                    </div>

                    <div class="col-lg-8">
                        <h2 class="ms-5 text-danger">Requirement</h2><br><br>
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Phone Number*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <div class="text-end mt-5">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
