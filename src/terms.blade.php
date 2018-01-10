@extends('legal::layout')

@section('title', 'Terms of Use')
@section('content')

	<header class='header'>
	    <svg class='header__logo'>
	        <use xlink:href='{{ url('/legal/dist/images/spritesheet.svg#logo') }}'></use>
	    </svg>
    </header>

    <nav class='navigation'>
    	<a href='{{ route('terms') }}' class='navigation__item navigation__item--selected'>Terms of Service</a>
    	<a href='{{ route('privacy') }}' class='navigation__item'>Privacy Policy</a>
    </nav>

    <article class='content'>
	    <header class='content__header'>
			<h1>Terms of Service</h1>

			<p>The following document outlines the Terms of Service (“Terms”) of the Blokks website.</p>

			<p>Before using any of the Blokks services, you are required to read, understand, and agree to these Terms. Blokks may update the Terms at any time and without prior notice by posting a new version at <a href='{{ route("terms") }}'>{{ route("terms") }}</a>. The information on this site and your use of it is subject to the most recent version of the Terms posted.</p>
		</header>

		<hr/>
		
		<h2>Description of Service</h2>

		<p>For the applicable fee set out in our Blokks policies, we offer an online software service (the “Service”), which – basically – consists of an online content management system that allows you to build your online schedule, host it on our servers and/or embed it on your own website and/or mobile app.</p>

		<hr/>

		<h2>Applicability</h2>
		
		<p>Our Terms cover the use of our Service, and are applicable to all its users. When we say, "we," "our," or "us," we’re referring to Blokks, registered with the Dutch Trade Register with number 66911524, our employees, directors, officers, affiliates, and subsidiaries. When we say, "you" or "your," we’re referring to you, your team, company or persons that have registered with us to use Blokks.</p>

		<hr/>

		<h2>Acceptance</h2>

		<p>By using the Service, you are agreeing, on behalf of yourself and those you represent, to comply with and be legally bound by these Terms as well as our <a href='{{ route("privacy") }}'>Privacy Policy</a> and all applicable laws.</p>

		<p>If you, for yourself or on behalf of those you represent, do not agree to any provision of these Terms, you must, for yourself and on behalf any such person(s), discontinue the registration process, discontinue your use of the Services, and, if you are already registered, cancel your account.</p>

		<hr/>

		<h2>Privacy and Security</h2>

		<p>We respect your privacy and keep all your data confidential. Please read our <a href='{{ route("privacy" ) }}'>Privacy Policy</a> for more details about how we handle your privacy when using the Service.</p>

		<p>We have taken technical precautions to keep your information safe. All information transferred between you and us, or between you and other users, is shared with us only on a strictly need to know basis only (e.g. to help you retrieve access to your account), and is treated with strict confidentiality.</p>

		<hr/>

		<h2>User conduct</h2>

		<p>All Content posted or otherwise submitted to the Service is the sole responsibility of the account holder from which such Content originates and you acknowledge and agree that you, and not Blokks are entirely responsible for all Content that you post, or otherwise submit to the Service. Blokks does not control user submitted Content and, as such, does not guarantee the accuracy, integrity or quality of such Content. You understand that by using the Service you may be exposed to Content that is offensive, indecent or objectionable.</p>

		<p>As a condition of use, you promise not to use the Service for any purpose that is unlawful or prohibited by these Terms, or any other purpose not reasonably intended by Blokks. By way of example, and not as a limitation, you agree not to use the Service:</p>

		<ol>
			<li>To abuse, harass, threaten, impersonate or intimidate any person;</li>
			<li>To post or transmit, or cause to be posted or transmitted, any Visual Content or Communications that are libelous, defamatory, obscene, pornographic, abusive, offensive, profane, or that infringes any copyright or other right of any person;</li>
			<li>For any purpose (including posting or viewing Visual Content) that is not permitted under the laws of the jurisdiction where you use the Service;</li>
			<li>To post or transmit, or cause to be posted or transmitted, any Communication designed or intended to obtain password, account, or private information from any Blokks user;</li>
			<li>To create or transmit unwanted ‘spam’ to any person or any URL</li>
			<li>To post copyrighted Visual Content or other Communications that do not belong to you or, with exception of commenting on Visual Content in Blogs, where you may post such Content with explicit mention of the author’s name and a link to the source of the Content;</li>
			<li>To advertise to, or solicit, any user to buy or sell any third party products or services, or to use any information obtained from the Service in order to contact, advertise to, solicit, or sell to any user without their prior explicit consent;</li>
			<li>To promote or sell Visual Content of another person; or</li>
			<li>To sell or otherwise transfer your profile.</li>
			<li>To report a suspected abuse of the Service or a breach of the Terms (other than relating to copyright infringement which is addressed under “Copyright” below) please send written notice to Blokks at email: notice@blokks.co.</li>
		</ol>

		<hr/>

		<h2>Copyright</h2>

		<p>Blokks respects the intellectual property rights of others. It is our policy to respond promptly any claim that Content posted on the Serbice infringes the copyright or other intellectual property infringement (“Infringement”) of any person. Blokks will use reasonable efforts to investigate notices of alleged Infringement and will take appropriate action under applicable intellectual property law and these Terms where it believes an Infringement has taken place, including removing or disabling access to the Content claimed to be infringing and/or terminating accounts and access to the Service.</p>

		<hr/>

		<h2>Links</h2>

		<p>The Service may provide, or third parties may provide, links to other World Wide Web sites or resources. Because Blokks has no control over such sites and resources, you acknowledge and agree that Blokks is not responsible for the availability of such external sites or resources, and does not endorse and is not responsible or liable for any content, advertising, products or other materials on or available from such sites or resources.</p>

		<p>You further acknowledge and agree that Blokks shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such site or resource.</p>

		<hr/>

		<h2>Termination</h2>

		<p>Blokks may terminate or suspend the Service and/or your Blokks account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination of your account, your right to use the Service will immediately cease. If you wish to terminate your Blokks account, you may simply discontinue using the Service. All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>

		<p>It is your responsibility to remove all Visual Content from your account prior to termination. Upon termination of your account Blokks will automatically remove all Visual Content posted to your account.</p>

		<hr/>

		<h2>Indemnity</h2>

		<p>You, agree to defend, indemnify and hold Blokks, its affiliates and its sponsors, partners, other co-branders and the respective directors, officers and employees of each harmless from and against any and all claims, losses, damages, liabilities and costs (including, without limitation, reasonable attorneys' fees and court costs) arising out of or relating to your breach of any of these Terms or use by you or any third party of the Service. Blokks reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you.</p>

		<hr/>

		<h2>Liability</h2>

		<p>In no event will we be liable to you (or to any third party) for any damages arising out of the use of the Service, whether based on warranty, contract, tort (including negligence) or any other legal theory and whether or not we have been informed of the possibility of such damage, even if any limited remedy is found to have failed its essential purpose. We do not accept any liability for damage as a result of an attributable failure in the performance (toerekenbare tekortkoming) of the agreement to provide the Service or pursuant to an unlawful act or whatever other reason, including, but not limited to any incidental, special, consequential damage resulting from or in connection with the use of the Service.</p>

		<hr/>

		<h2>Governing Law & Jurisdiction</h2>

		<p>This Agreement is governed by Dutch law. The exclusive jurisdiction and venue of any action with respect to any subject matter relating to this Agreement will be the courts located in Groningen, the Netherlands.</p>

	</article>
	
@stop
