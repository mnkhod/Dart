var menu = document.querySelector("#mobile-toggle");
var remove = document.querySelector('#mobile-remove');
var nav = document.querySelector('#mobile-nav');

menu.addEventListener('click', function(){
    nav.classList.add('active');
});

remove.addEventListener('click', function(){
    nav.classList.remove('active');
});

// Plus Minus

    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.fa-plus-square'),
        btnDown = spinner.find('.fa-minus-square'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });

    // Tabs
    var Tabs = {
        init: function() {
          this.bindUIfunctions();
          this.pageLoadCorrectTab();
        },
      
        bindUIfunctions: function() {
          // Delegation
          $(document)
            .on("click", ".transformer-tabs a[href^='#']:not('.active')", function(
              event
            ) {
              Tabs.changeTab(this.hash);
              event.preventDefault();
            })
            .on("click", ".transformer-tabs a.active", function(event) {
              Tabs.toggleMobileMenu(event, this);
              event.preventDefault();
            });
        },
      
        changeTab: function(hash) {
          var anchor = $("[href=" + hash + "]");
          var div = $(hash);
      
          // activate correct anchor (visually)
          anchor
            .addClass("active")
            .parent() 
            .siblings()
            .find("a")
            .removeClass("active");
      
          // activate correct div (visually)
          div
            .addClass("active")
            .siblings()
            .removeClass("active");
      
          // update URL, no history addition
          // You'd have this active in a real situation, but it causes issues in an <iframe> (like here on CodePen) in Firefox. So commenting out.
          // window.history.replaceState("", "", hash);
      
          // Close menu, in case mobile
          anchor.closest("ul").removeClass("open");
        },
      
        // If the page has a hash on load, go to that tab
        pageLoadCorrectTab: function() {
          this.changeTab(document.location.hash);
        },
      
        toggleMobileMenu: function(event, el) {
          $(el)
            .closest("ul")
            .toggleClass("open");
        }
      };
      
      Tabs.init();
      
      $('.nav-controls ul li').on('click', function() {
        var tsfilter = $(this).data('tsfilter');
        $('.nav-controls ul li').removeClass('active');
        $(this).addClass('active');

        if(tsfilter == 'all') {
            $('.schedule-table').removeClass('filtering');
            $('.ts-item').removeClass('show');
        } else {
            $('.schedule-table').addClass('filtering');
        }
        $('.ts-item').each(function(){
            $(this).removeClass('show');
            if($(this).data('tsmeta') == tsfilter) {
                $(this).addClass('show');
            }
        });
    });


    // Mobile Filter Toggle


    var mobilefilterButton = document.querySelector('.sticky-filter-mphone');
    var mobilefilterTab = document.querySelector('.sticky-filter-hover');

    mobilefilterButton.addEventListener('click', function(){
        mobilefilterTab.classList.toggle('u-none');
    });