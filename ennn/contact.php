<?php
  $title = "Contact";
  $description = "You can easily reach us by filling in the “Contact Form” and “Agency Application Form” at our page, or by calling us from our below contact details. You can also share your thoughts about our company by submitting the “Satisfaction/Complaint Form”. ";
  include 'header.php'; 
?>

 <section class="map-container">
            <h1>Head Office</h1>
            <div class="map-close"></div>
            
             <div class="map-container-overlay">
        </div>
 </section>

    <section class="subpage">
             <div class="subpage-header" style="background-image: url(img/istanbul-teknik-contact.png);"></div>
             <div class="subpage-header-mobile" style="background-image: url(img/istanbul-teknik-contact-small.png);"></div>
        <div class="wrapper">
            <ol class="breadcrumb">
                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                    <a href="/en" itemprop="url">
                        <span itemprop="title">Home</span> /&nbsp;
                    </a>
                </li>
                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                    <a href="contact" itemprop="url">
                        <span itemprop="title">Contact</span>
                    </a>
                </li>
            </ol>
            <h2 title="Contact" data-url="contact">Contact</h2>
            <p>You can easily reach us by filling in the “Contact Form” and “Agency Application Form” at our page, or by calling us from our below contact details. You can also share your thoughts about our company by submitting the “Satisfaction/Complaint Form”.</p>

        </div>
        <div class="seperator"></div>


<div id="tabs-container">
    <div class="wrapper-ignore">
         <div class="contact-tabs">
             <ul>
                  <li><a class="current" href="#tab-1">Contact Form</a></li>
                  <li><a href="#tab-2">Reseller Application Form</a></li>
                  <li><a href="#tab-3">Satisfaction / Complaint Form</a></li>
             </ul>
        </div>
    </div>






<div class="wrapper">
    <div class="tab">
        <div id="tab-1" class="tab-content">
         <section class="contact-form" id="contact-form-email">
            <div class="preload">

   </div>

         <div class="contact-form-answer">
          <div class="contact-form-send-icon"></div>
                   <h5>Your message has been forwarded to the relevant department of <b>Istanbul Teknik.</b></h5>
                   <p>You will be returned to your nearest time.</p>
          </div>
   
    <div class="contact-form-inner">
        <div class="line">
           <div class="column-half">
                  <label for="advesoyad">Name/Surname</label>  
                  <input  name="advesoyad" type="text">
           </div>
           <div class="column-half">
                  <label for="firma">Company</label>  
                  <input name="firma" type="text">
           </div>
        </div>

        <div class="line">
           <div class="column-half">
                  <label for="gorev">Duty</label>  
                  <input  name="gorev" type="text">
           </div>
           <div class="column-half">
                  <label for="telefon">Phone</label>  
                  <input  name="telefon"  type="text">
           </div>
        </div>


        <div class="line">
               <div class="column-half">
                      <label for="email">Email</label>  
                      <input name="email" type="text">
               </div>
               <div class="column-half">
                      <label for="konu">Subject</label>  
                      <input name="konu" type="text">
               </div>
        </div>

        <div class="line">
               <div class="column-full">
                      <label for="mesaj">Message</label>  
                      <textarea name="mesaj" rows="4"></textarea>
     
               </div>
        </div>
         
         <div class="line">
             <div class="column-full">
                  <a id="gonder-mail">Send</a>

             </div>
         </div>
    </div> 

         </section>
   </div>


    <div id="tab-2" class="tab-content">
         <section class="contact-form" id="contact-form-bayi">
                  <div class="preload"></div>

        <div class="contact-form-answer">
          <div class="contact-form-send-icon"></div>
                   <h5>Your message has been forwarded to the relevant department of <b>Istanbul Teknik.</b></h5>
                   <p>You will be returned to your nearest time.</p>
          </div>
   

    <div class="contact-form-inner">
               <div class="line">
                   <div class="column-half">
                          <label for="firmaadi">Company full name</label>  
                          <input  name="firmaadi" type="text">
                   </div>
                   <div class="column-half">
                          <label for="yetkilikisiadivegorevi">Name of the person in charge and position/label>  
                          <input name="yetkilikisiadivegorevi" type="text">
                   </div>
                </div>

               <div class="line">
                   <div class="column-half">
                          <label for="firmaadresi">Company address</label>  
                          <input  name="firmaadresi" type="text">
                   </div>
                   <div class="column-half">
                          <label for="telefon">Phone</label>  
                          <input name="telefon" type="text">
                   </div>
                </div>

               <div class="line">
                   <div class="column-half">
                          <label for="fax">Fax</label>  
                          <input  name="fax" type="text">
                   </div>
                   <div class="column-half">
                          <label for="ceptelefonu">Mobile Phone</label>  
                          <input name="ceptelefonu" type="text">
                   </div>
                </div>

             <div class="line">
                   <div class="column-half">
                          <label for="email">E-mail</label>  
                          <input  name="email" type="text">
                   </div>
                   <div class="column-half">
                          <label for="firmawebsiteadresi">Company website</label>  
                          <input name="firmawebsiteadresi" type="text">
                   </div>
            </div>
             <div class="line">
                   <div class="column-half">
                          <label for="vergidairesino">Tax no</label>  
                          <input  name="vergidairesino" type="text">
                   </div>
                   <div class="column-half">
                          <label for="ticsicno">Trade register no</label>  
                          <input name="ticsicno" type="text">
                   </div>
            </div>
             <div class="line">
                   <div class="column-half">
                          <label for="oncekiyilcirosu">Previous year's revenue</label>  
                          <input  name="oncekiyilcirosu" type="text">
                   </div>
                   <div class="column-half">
                          <label for="toplampersonalsayisi">Total number of employees</label>  
                          <input name="toplampersonalsayisi" type="text">
                   </div>
            </div>

        <div class="line">
               <div class="column-full">
                      <label for="aktifolaraksatisyapilaniller">Listing of sales markets by country/city</label>  
                      <textarea name="aktifolaraksatisyapilaniller"  rows="4"></textarea>
     
               </div>
        </div>

        <div class="line">
               <div class="column-full">
                      <label for="bayiliginiyapmaktaoldugunuzdigermarkalar">Other brands you represent as an agency</label>  
                      <textarea name="bayiliginiyapmaktaoldugunuzdigermarkalar"  rows="4"></textarea>
     
               </div>
        </div>
         <div class="line">
             <div class="column-full">
                  <a id="gonder-bayi">Send</a>
             </div>
         </div>
                </div>
         </section>  
    </div>

 
    <div id="tab-3" class="tab-content">
         <section class="contact-form" id="contact-form-musteri">
                  <div class="preload"></div>

        <div class="contact-form-answer">
          <div class="contact-form-send-icon"></div>
                   <h5><b>İstanbul Teknik</b> hakkındaki değerlendirmeniz ilgili birimine iletilmiştir.</h5>
                   <p>Teşekkür ederiz</p>
          </div>
   

    <div class="contact-form-inner">
               <div class="line">
                   <div class="column-half">
                          <label for="firmaadi">Company name</label>  
                          <input  name="firmaadi" type="text">
                   </div>
              
                 <div class="column-half">
                          <label for="yetkilikisiadivegorevi">Responsible person name and duty</label>  
                          <input name="yetkilikisiadivegorevi" type="text">
                   </div>
                </div>

                     
        <div class="line">
               <div class="column-full">
                        <label for="memnuniyet-sikayet-konusu">Subject of Satisfaction/Complaint</label>  
                         <select name="memnuniyet-sikayet-konusu">
                              <option value="Select">Select</option>
                              <option value="Ürün">Product</option>
                              <option value="Lojistik">Logistics</option>
                              <option value="Kalite">Quality</option>
                              <option value="Termin Tarihi">Term Date</option>
                              <option value="Fatura">Invoice</option>
                              <option value="Müşteri İlişkileri">Customer Relations</option>
                              <option value="Diğer">Other</option>
                          </select>
               </div>
        </div>
 

        <div class="line">
               <div class="column-full">
                      <label for="memnuniyetveyasikayet">Your feedback Satisfaction/Complaint</label>  
                      <textarea name="memnuniyetveyasikayet"  rows="4"></textarea>
     
               </div>
        </div>


          
          <div class="line">
                   <div class="column-half">
                          <label for="email">E-mail</label>  
                          <input  name="email" type="text">
                   </div>
                   <div class="column-half">
                          <label for="telefon">Phone</label>  
                          <input name="telefon" type="text">
                   </div>
            </div>




         <div class="line">
             <div class="column-full">
                  <a id="gonder-musteri">Send</a>
             </div>
         </div>
                </div>
         </section>  
    </div>



</div>


<section class="addresses">
         <h2>Contact Information</h2>
          <ul>
            <li>
                <h5>HEAD OFFICE</h5>
                <div class="line">
                      <div class="label">Address<span class="double-dots">:</span></div><div class="desc">Tekstilkent Koza Plaza <br/>B Blok K:30 34235 <br/>Esenler/İSTANBUL
                      <a data-map="merkez" class="google-map google-map1"> Show on Map</a>

                      </div>
                </div>
                    <div class="line">
                          <div class="label">Tel<span class="double-dots">:</span></div><div class="desc">0212 438 18 08</div>
                    </div>
                    <div class="line">
                          <div class="label">Fax<span class="double-dots">:</span></div><div class="desc">0212 438 18 01</div>
                    </div>
                    <div class="line">
                          <div class="label">Email<span class="double-dots">:</span></div><div class="desc">info@istanbulteknik.com</div>
                    </div>
            </li>
            <li>
                <h5>WAREHOUSE</h5>
                <div class="line">
                      <div class="label">Address<span class="double-dots">:</span></div><div class="desc">Pirinççi Mah. <br/>Pirinççi Köy Yolu No:57/1 Eyüpsultan/İSTANBUL
                      <a data-map="depo" class="google-map google-map2"> Show on Map</a>
                      </div>
                </div>
                    <div class="line">
                          <div class="label">Tel<span class="double-dots">:</span></div><div class="desc">0212 595 20 00</div>
                    </div>
                    <div class="line">
                          <div class="label">Fax<span class="double-dots">:</span></div><div class="desc">0212 595 02 22</div>
                    </div>
            </li>

            <li>
                <h5>FACTORY</h5>
                <div class="line">
                      <div class="label">Address<span class="double-dots">:</span></div><div class="desc">Velimeşe OSB Mah. <br/>226 Sokak No:19 <br/>Ergene / TEKİRDAĞ
                      <a data-map="fabrika" class="google-map google-map3"> Show on Map</a>
                      </div>
                </div>
                    <div class="line">
                          <div class="label">Tel<span class="double-dots">:</span></div><div class="desc">0282 674 43 08</div>
                    </div>
                    <div class="line">
                          <div class="label">Fax<span class="double-dots">:</span></div><div class="desc">0282 674 43 04</div>
                    </div>
            </li>




          </ul>

     </section>

</div>


</section><!-- SubPage END -->



<?php include 'footer.php'; ?>
