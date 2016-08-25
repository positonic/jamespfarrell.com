@extends('app')

@section('title') Case Study #2 @endsection

@section('content')

    <div class="row{{-- page-container-content--}}">
        <div class="col-md-12">
            <a href="/consulting/case-studies/whygo" style="float:right;margin-top:15px;">next case study ></a>

            <h1>Case study #2</h1>
            <h3><a href="http://bokakanot.se/">BokaKanot</a> is a startup aimed at the Outdoor adventure market</h3>
            <br/>

            <h3>1. Overview</h3>
            <p><a href="http://www.whygo.net/" rel="nofollow">BokaKanot</a> needed an online booking and inventory management system</p>

            <p>We architected, designed and developed the entire application from the database to the code.</p>
            <p>I played an active part in the design of all parts of the system. Including the backend administration system and the booking process.</p>
                &nbsp;

            <h3>2. The Context and Challenge</h3>

            The second section of your case study — commonly referred to as the Context and the Challenge — is designed to provide your prospective client with a detailed description of the context that led to the creation of the project. If it’s well-written, the reader will leave with a solid understanding of the environmental factors and problems that you were hired to solve as a designer.

            This section can be distilled into three main elements:

            1. Project background and description — The contextual information for the project including timelines, budgetary constraints, and the overarching purpose of the job.

            2. The problem — The “why?” and the focal point for the project. Your case study needs to clearly explain the problem that led to the onset of the project. For example, if you were working on an ecommerce project then your problem could be something similar to:

            “Interest for company X’s core product was growing internationally at an unprecedented scale. This led to severe logistical and distribution problems that could not be fixed by physical retail solutions alone.”

            3. Project goals and objectives — Every website you work on should have tangible goals and objectives associated with the project’s problem. Are you trying to drive more traffic to the site overall? Optimize product pages for higher conversions? Reduce cart abandon rates? No matter what your objectives are, try your best to include any quantifiable metrics that were known at the onset of the project.



            <p>Up until the point at which I was engaged by whyGo, they had been relying on 3rd party agencies and developers to develop their applications</p>
            <p>This meant that there was no overall guiding hand that had an overview of where the company was coming from and where it was going to.</p>
            <p>External contractors and agencies had no motivation to invest in the future of the code, and little time or energy was put into architecture and maintainability.</p>
            <p>The starting point was a mess of spagetti code.</p>

            <p>Additional issues included:</p>
            <ul>
                <li>Complex, undocumented business rules that had evolved over many years, including many sinlge use case exceptions, all hidden in the code.</li>
                <li>Technological integration issues. The core of the code had been written in .net, so refactoring and architecting existing code wasn't and option</li>
                <li>Little or no Orthogonality - seperation of concerns in the code</li>
                <li>A lot of duplication and repetition in the code meaning that there is no single source of truth for data, for example a phone number - hardcoded in many places</li>
                <li>Requirement to get our stock into an Outlook plugin and allow for us to get availability and accept bookings</li>
                <li>Integrate our stock and booking system with a 3rd party booking system, also allowing live availability checks and bookings</li>
                <li>Expand into the Meeting Room space, taking as much exising functionality with us as possible</li>
            </ul>



            <h3>3. The Process and Insight</h3>

            <p>The process we followed is that all new code must be written in a new technology.</p>

            <p>Solutions</p>
            <ul>
                <li>Architect and develop a Software and a service architecture (SOA) so that we could more easily modularise and develop new components with more modern technologies</li>
                <li>Create a .net WCF api for booking, availability, making stock available, pricing. This allowed us to integrate with a 3rd party outlook plugin, and also to use the services in our re-built search search results.

                    This also allowed us to integrate with the other 3rd party websites, making our stock available to them.</li>
                <li>Redevelopment of search results as a single page application, using BackboneJS, and RequireJs</li>
                <li>Development of a new Booking flow for the new Meeting Rooms product</li>
                <li>I was responsible for outsourcing, managing code quality, source control and future development stategy</li>
            </ul>


            <h3>The Results</h3>
            For most business owners, it’s all about the numbers. That’s why this section is crucial for an effectively written case study.

            The Results section will cover the qualitative and quantitative success metrics from your project. While the type of metrics you report on can vary from one project to another, they should directly address the objectives you established in The Context and Challenge section. Having these results in hand will allow you to show your prospects that your work had a direct influence on your client meeting their goals. If you can do this, you’ll help them feel more comfortable putting their business (and their money) into your hands.

            In addition to, or in lieu of, quantifiable metrics, consider including one to three testimonials in this section. These testimonials are another great tactic for boosting the confidence of your prospects. Since the source of these reviews come from outside your business, prospects are more likely to trust them as a reputable reference. When including your testimonials, however, keep them short and sweet. They can be as simple as one or two sentences, so long as they illustrate your previous client’s satisfaction with your work.

            <p><a href="case-studies/whygo">next case study</a></p>

        </div>
    </div>

@endsection