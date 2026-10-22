/*======================================
	button hover
	========================================*/
	$('.btn-hover').on('mouseenter', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: 0,
            left: 0
        })
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function(e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: 0,
            left: 0
        })
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    })


// // // testimonials
$( document ).ready(function() {
   $('.banner-wrapper').slick({
  dots: false,
  infinite: true,
  speed: 1300,
  slidesToShow: 1,
  slidesToScroll: 1,
arrows: false,
autoplay: true,
 loop: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		  arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		   arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
				
}); 

// Testimonials section
$( document ).ready(function() {
    $('.testimonials-wrapper').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        loop: true,
        arrows:false,
        centerMode: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});




// // A $( document ).ready() block.
$( document ).ready(function() {
    /**
 *  Read More JS
 */
const ReadMore = (() => {
    let s;

    return {

        settings() {
            return {
                content: document.querySelectorAll('.js-read-more'),
                originalContentArr: [],
                truncatedContentArr: [],
                moreLink: "<span>Read More</span><i class='closed'></i>",
                lessLink: "<span>Hide</span><i class='opened'></i>",
            }
        },

        init() {
            s = this.settings();
            this.bindEvents();
        },

        bindEvents() {
            ReadMore.truncateText();
        },

        /**
         * Count Words
         * Helper to handle word count.
         * @param {string} str - Target content string.
         */
        countWords(str) {
            return str.split(/\s+/).length;
        },

        /**
         * Ellpise Content
         * @param {string} str - content string.
         * @param {number} wordsNum - Number of words to show before truncation.
         */
        ellipseContent(str, wordsNum) {
            return str.split(/\s+/).slice(0, wordsNum).join(' ') + '...';
        },

        /**
         * Truncate Text
         * Truncate and ellipses contented content
         * based on specified word count.
         * Calls createLink() and handleClick() methods.
         */
        truncateText() {

            for (let i = 0; i < s.content.length; i++) {
                //console.log(s.content)
                const originalContent = s.content[i].innerHTML;
                const numberOfWords = s.content[i].dataset.rmWords;
                const truncateContent = ReadMore.ellipseContent(originalContent, numberOfWords);
                const originalContentWords = ReadMore.countWords(originalContent);

                s.originalContentArr.push(originalContent);
                s.truncatedContentArr.push(truncateContent);

                if (numberOfWords < originalContentWords) {
                    s.content[i].innerHTML = s.truncatedContentArr[i];
                    let self = i;
                    ReadMore.createLink(self)
                }
            }
            ReadMore.handleClick(s.content);
        },

        /**
         * Create Link
         * Creates and Inserts Read More Link
         * @param {number} index - index reference of looped item
         */
        createLink(index) {
            const linkWrap = document.createElement('span');

            linkWrap.className = 'read-more__link-wrap';

            linkWrap.innerHTML = `<a id="read-more_${index}" class="read-more__link" style="cursor:pointer;">${s.moreLink}</a>`;

            // Inset created link
            s.content[index].parentNode.insertBefore(linkWrap, s.content[index].nextSibling);

        },

        /**
         * Handle Click
         * Toggle Click eve
         */
        handleClick(el) {
            const readMoreLink = document.querySelectorAll('.read-more__link');

            for (let j = 0, l = readMoreLink.length; j < l; j++) {

                readMoreLink[j].addEventListener('click', function () {

                    const moreLinkID = this.getAttribute('id');
                    let index = moreLinkID.split('_')[1];

                    el[index].classList.toggle('is-expanded');

                    if (this.dataset.clicked !== 'true') {
                        el[index].innerHTML = s.originalContentArr[index];
                        this.innerHTML = s.lessLink;
                        this.dataset.clicked = true;
                    } else {
                        el[index].innerHTML = s.truncatedContentArr[index];
                        this.innerHTML = s.moreLink;
                        this.dataset.clicked = false;
                    }
                });
            }
        },

        /**
         * Open All
         * Method to expand all instances on the page.
         */
        openAll() {
            const instances = document.querySelectorAll('.read-more__link');
            for (let i = 0; i < instances.length; i++) {
                content[i].innerHTML = s.truncatedContentArr[i];
                instances[i].innerHTML = s.moreLink;
            }
        }
    }
})();

ReadMore.init()

});

// // // filler section
$( document ).ready(function() {
   $('.filler-section-wrapper').slick({
  dots: false,
  infinite: true,
  speed: 1300,
  slidesToShow: 1,
  slidesToScroll: 1,
arrows: false,
autoplay: true,
 loop: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		  arrows: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		   arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
				
}); 

// // isotopes js
// A $( document ).ready() block.
$( document ).ready(function() {
  var $grid = $(".grid").isotope({
    // options
  });
  // filter items on button click
  $(".filter-button-group").on("click", "li", function () {
    var filterValue = $(this).attr("data-filter");
    $grid.isotope({ filter: filterValue });
  
  
  });
  // filter items on button click
  $(".filter-button-group").on("click", "li", function () {
    $(this).addClass("active").siblings().removeClass("active");
      // Refresh the slider after the gallery is filtered
    
  });
  // images loaded
  var $grid = $(".grid").imagesLoaded(function () {
    // init Isotope after all images have loaded
    $grid.isotope({
      // options...
    });
  });


});


let question = document.querySelectorAll(".question");

question.forEach(question => {
  question.addEventListener("click", event => {
    const active = document.querySelector(".question.active");
    if(active && active !== question ) {
      active.classList.toggle("active");
      active.nextElementSibling.style.maxHeight = 0;
    }
    question.classList.toggle("active");
    const answer = question.nextElementSibling;
    if(question.classList.contains("active")){
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }
  })
})
