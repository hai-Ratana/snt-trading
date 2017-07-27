<!-- Slider-Section-Strat  -->
<div class="slider_area">
  <div class="fullwidthbanner">
    <ul>
      @foreach ($sliders as $key => $slider)
      <!-- SLIDE-1  -->
      <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="{{ $slider->backgroundSlide }}"  alt="mainbanner-31"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- background Slider -->
        <!-- LAYERS -->
        <!-- LAYER NR. 1 -->
        <div class="tp-caption banner1 tp-fade tp-resizeme"
          data-x="910"
          data-y="20"
          data-speed="300"
          data-start="500"
          data-easing="Power3.easeInOut"
          data-splitin="none"
          data-splitout="none"
          data-elementdelay="0"
          data-endelementdelay="0"
          data-end="8700"
          data-endspeed="300"
          style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="{{ $slider->imageSlide }}" alt="">
          <!-- image slider -->
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption banner12 tp-fade tp-resizeme"
           data-x="385"
           data-y="145"
          data-speed="300"
          data-start="800"
          data-easing="Power3.easeInOut"
          data-splitin="none"
          data-splitout="none"
          data-elementdelay="0"
          data-endelementdelay="0"
           data-end="8700"
          data-endspeed="300"
          style="z-index: 7;font-size:72px; font-family:nexa_blackregular;font-weight:700;color:#3a4b60;max-width: auto; max-height: auto; white-space: nowrap;">{!! $slider->title !!}
          <!-- Title slider -->
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption banner13 tp-fade tp-resizeme"
          data-x="385"
          data-y="190"
          data-speed="300"
          data-start="1100"
          data-easing="Power3.easeInOut"
          data-splitin="none"
          data-splitout="none"
          data-elementdelay="0"
          data-endelementdelay="0"
           data-end="8700"
          data-endspeed="300"
          style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:24px;line-height:26px;font-family:Roboto;font-weight:100; color:#ffffff;letter-spacing:8px;">{!! $slider->subTitle !!}
          <!-- subTitle slider -->
        </div>
        <div class="tp-caption banner21 tp-fade tp-resizeme"
          data-x="385"
          data-y="345"
          data-speed="300"
          data-start="1100"
          data-easing="Power3.easeInOut"
          data-splitin="none"
          data-splitout="none"
          data-elementdelay="0"
          data-endelementdelay="0"
           data-end="8700"
          data-endspeed="300"
          style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
          {!! $slider->description !!}
        </div>


      </li>
      @endforeach

    </ul>
  </div>
</div>
<!-- Slider-Section-End  -->
