<section class='poster'>
	<img class='poster__image lazyload'
	    data-sizes='auto' 
		data-srcset='{{ url($images[0]) }} 480w, {{ url($images[1]) }} 960w, {{ url($images[2]) }} 1440w'/>

	<noscript>
	    <img src='{{ url($images[1]) }}' class='poster__image' />
	</noscript>			

	<a href='{{ $link }}' target='credits' class='poster__credits'>{{ $credits }}</a>
</section>