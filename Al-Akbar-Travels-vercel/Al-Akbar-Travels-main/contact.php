<?php
$pageTitle = "Contact Us — Al Akbar Travel & Tours (Pvt) Ltd.";
$pageDesc = "Get in touch with Al Akbar Travel & Tours in Sahiwal. Call +92-307-8455527 or visit our head office at Royal Palm Garden, Sahiwal. 24/7 travel assistance.";
$currentPage = "contact";
include 'includes/header.php';
?>

<!-- ==========================================================================
     CINEMATIC OCEAN LUXURY HERO — VIP CONCIERGE & LOUNGE DESK
     ========================================================================== -->
<section class="hero-inner hero-contact section-pearl">
  <div class="hero-backdrop-glow"></div>
  <div class="container hero-content">
    <div class="hero-pill-badge reveal stagger-1">
      <span class="pulse-badge-gold"></span>
      <span>24/7 EXECUTIVE TRAVEL CONCIERGE · HEADQUARTERS SAHIWAL</span>
    </div>
    
    <h1 class="reveal stagger-2">
      <span class="ocean-gradient-text font-display">CONNECT WITH US.</span><br>
      VIP TRAVEL ASSISTANCE
    </h1>
    
    <p class="hero-subtitle reveal stagger-3">
      Our dedicated travel advisors are on standby 24 hours a day, 7 days a week. Connect via instant VIP WhatsApp, direct phone line, or visit our executive headquarters in Sahiwal.
    </p>
    
    <div class="hero-actions reveal stagger-4">
      <a class="btn btn-whatsapp btn-lg" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel!%20I%20would%20like%20to%20inquire%20about%20travel%20services." target="_blank" rel="noopener">
        💬 Immediate WhatsApp Desk
      </a>
      <a class="btn btn-outline btn-lg" href="tel:+923078455527">
        📞 Direct Line: 0307-8455527
      </a>
    </div>
    
    <div class="hero-trust-bar reveal stagger-5">
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('pin', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Royal Palm</div>
          <div class="trust-card-lbl">Head Office Sahiwal</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('clock', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">5 Mins</div>
          <div class="trust-card-lbl">Average WhatsApp Reply</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('iata', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">Govt. DTS</div>
          <div class="trust-card-lbl">Licensed &amp; Bonded</div>
        </div>
      </div>
      <div class="trust-card">
        <div class="trust-card-icon"><?php echo luxIcon('shield', 'lux-icon', 24); ?></div>
        <div>
          <div class="trust-card-val">24/7 Support</div>
          <div class="trust-card-lbl">Global Transit Hotline</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form & Agency Details -->
<section class="section-sky" style="background:#E5F2F8;padding:70px 0;">
  <div class="container">
    <div class="contact-grid">
      <!-- Left Column: Interactive Inquiry Form -->
      <div class="contact-card reveal">
        <h3 style="margin-bottom:6px;">Send An Online Inquiry</h3>
        <p class="muted small" style="margin-bottom:24px;">Fill in your details below and our travel advisor will respond within 5 to 10 minutes.</p>
        
        <form id="contactForm" onsubmit="handleContactSubmit(event)">
          <div class="form-group">
            <label class="form-label" for="cName">Your Full Name *</label>
            <input type="text" id="cName" class="form-control" required placeholder="e.g. Muhammad Usman">
          </div>
          
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
            <div class="form-group">
              <label class="form-label" for="cPhone">Phone / WhatsApp Number *</label>
              <input type="tel" id="cPhone" class="form-control" required placeholder="0307-XXXXXXX">
            </div>
            
            <div class="form-group">
              <label class="form-label" for="cEmail">Email Address</label>
              <input type="email" id="cEmail" class="form-control" placeholder="name@example.com">
            </div>
          </div>
          
          <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
            <div class="form-group">
              <label class="form-label" for="cService">Travel Service Needed *</label>
              <select id="cService" class="form-control" required>
                <option value="Umrah Package 2026">Umrah Package 2026</option>
                <option value="International / Domestic Flights">Flight Tickets</option>
                <option value="Tourist / Visit Visa">Visit / Tourist Visa</option>
                <option value="Makkah / Madinah Hotel Tariff">Hotel Tariff Booking</option>
                <option value="Holiday Tour Package">Holiday Tour</option>
                <option value="B2B Agency Partnership">B2B Agent Partnership</option>
              </select>
            </div>
            
            <div class="form-group">
              <label class="form-label" for="cDate">Expected Travel Date</label>
              <input type="date" id="cDate" class="form-control">
            </div>
          </div>
          
          <div class="form-group">
            <label class="form-label" for="cMessage">Your Message / Requirements *</label>
            <textarea id="cMessage" class="form-control" rows="4" required placeholder="Tell us about the number of travelers, departure city, preferred airlines or hotels..."></textarea>
          </div>
          
          <div id="contactSuccessMsg" style="display:none;padding:12px;background:var(--green-light);color:var(--green-dark);border-radius:var(--radius-sm);margin-bottom:16px;font-weight:700;font-size:0.9rem;">
            ✓ Inquiring directly with WhatsApp desk! Opening WhatsApp now...
          </div>
          
          <button type="submit" class="btn btn-whatsapp btn-block" style="padding:14px;">
            💬 Send Travel Inquiry via WhatsApp →
          </button>
        </form>
      </div>
      
      <!-- Right Column: Agency Details & Direct Contact Info -->
      <div class="contact-card reveal" style="background:var(--card);display:flex;flex-direction:column;">
        <span class="tag tag-gold" style="align-self:flex-start;margin-bottom:12px;">Official IATA Travel Agency</span>
        <h3>Al Akbar Travel & Tours (Pvt) Ltd.</h3>
        <p class="muted">Premier pilgrimage, corporate, and leisure travel management since 2010.</p>
        
        <ul class="contact-list" style="margin-top:20px;">
          <li class="contact-item">
            <div class="contact-icon"><?php echo luxIcon('pin', 'lux-icon', 22); ?></div>
            <div class="contact-content">
              <strong>Head Office Address</strong>
              <span>Royal Palm Garden (Near McDonald's), Sahiwal, Punjab, Pakistan</span>
            </div>
          </li>
          
          <li class="contact-item">
            <div class="contact-icon"><?php echo luxIcon('phone', 'lux-icon', 22); ?></div>
            <div class="contact-content">
              <strong>Direct Phone Help Desk</strong>
              <a href="tel:+923078455527">+92-307-8455527</a> · <a href="tel:+923008455527">+92-300-8455527</a>
            </div>
          </li>
          
          <li class="contact-item">
            <div class="contact-icon"><?php echo luxIcon('whatsapp', 'lux-icon', 22); ?></div>
            <div class="contact-content">
              <strong>WhatsApp Booking Desk (24/7)</strong>
              <a href="https://wa.me/923078455527" target="_blank" rel="noopener">0307-8455527 (Instant Replies)</a>
            </div>
          </li>
          
          <li class="contact-item">
            <div class="contact-icon"><?php echo luxIcon('document', 'lux-icon', 22); ?></div>
            <div class="contact-content">
              <strong>Official Inquiries Email</strong>
              <a href="mailto:alakbartravel3@gmail.com">alakbartravel3@gmail.com</a>
            </div>
          </li>
          
          <li class="contact-item">
            <div class="contact-icon">🕐</div>
            <div class="contact-content">
              <strong>Operational Hours</strong>
              <span>Open 24/7 / 365 Days a Year</span>
            </div>
          </li>
        </ul>
        
        <div style="margin-top:auto;padding-top:24px;border-top:1px solid var(--border);display:flex;gap:12px;flex-wrap:wrap;">
          <a class="btn btn-whatsapp btn-sm" href="https://wa.me/923078455527?text=Assalam%20o%20Alaikum%20Al%20Akbar%20Travel%2C%20I%20am%20inquiring%20about%20travel%20services." target="_blank" rel="noopener">
            💬 Quick WhatsApp
          </a>
          <a class="btn btn-primary btn-sm" href="tel:+923078455527">
            📞 Call Desk: 0307-8455527
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Interactive Map Section -->
<section class="section-light" style="padding-top:20px;">
  <div class="container">
    <div class="section-head reveal" style="margin-bottom:24px;">
      <div class="section-head-main">
        <p class="eyebrow">Google Maps Location</p>
        <h2>Find Our Sahiwal Head Office</h2>
      </div>
      <p class="section-desc">Conveniently situated at Royal Palm Garden near McDonald's in Sahiwal. Ample customer parking available.</p>
    </div>
    
    <div class="map-embed reveal" style="height:450px;">
      <iframe title="Al Akbar Travel & Tours Head Office Sahiwal" src="https://www.google.com/maps?q=Royal%20Palm%20Garden%2C%20Sahiwal%2C%20Punjab%2C%20Pakistan&output=embed" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
    <p class="center small muted" style="margin-top:14px;">
      Royal Palm Garden (Near McDonald's), Sahiwal · <a href="https://www.google.com/maps/search/?api=1&query=Royal+Palm+Garden+Sahiwal" target="_blank" rel="noopener">Open in Google Maps App ↗</a>
    </p>
  </div>
</section>

<script>
function handleContactSubmit(e) {
  e.preventDefault();
  const name = document.getElementById('cName').value.trim();
  const phone = document.getElementById('cPhone').value.trim();
  const service = document.getElementById('cService').value;
  const date = document.getElementById('cDate').value;
  const msg = document.getElementById('cMessage').value.trim();
  
  const text = "Assalam o Alaikum Al Akbar Travel!\n\n" +
               "👤 Name: " + name + "\n" +
               "📞 Phone: " + phone + "\n" +
               "🎯 Service: " + service + "\n" +
               (date ? "🗓️ Travel Date: " + date + "\n" : "") +
               "📝 Message: " + msg;
               
  const successBox = document.getElementById('contactSuccessMsg');
  if (successBox) successBox.style.display = 'block';
  
  const waUrl = "https://wa.me/923078455527?text=" + encodeURIComponent(text);
  setTimeout(function() {
    window.open(waUrl, '_blank');
  }, 400);
}
</script>

<?php include 'includes/footer.php'; ?>
