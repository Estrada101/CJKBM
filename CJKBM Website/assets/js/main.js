document.addEventListener('DOMContentLoaded', function() {
    const scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '.navbar',
        offset: 100
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 70,
                    behavior: 'smooth'
                });
                
                if (history.pushState) {
                    history.pushState(null, null, targetId);
                } else {
                    location.hash = targetId;
                }
            }
        });
    });


    const prayerForm = document.getElementById('prayerForm');
    if (prayerForm) {
        prayerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const prayerRequest = document.getElementById('prayerRequest').value;
            
            console.log('Prayer Request Submitted:', { name, email, prayerRequest });
            
            alert('Thank you for your prayer request. We will pray for you!');
            
            // Reset form
            prayerForm.reset();
            
            // Add to prayer wall
            const prayerWall = document.getElementById('prayerWall');
            if (prayerWall) {
                const newPrayer = document.createElement('div');
                newPrayer.className = 'prayer-item';
                newPrayer.innerHTML = `
                    <h5>${name}</h5>
                    <p>${prayerRequest}</p>
                    <small class="text-muted">Posted just now</small>
                `;
                prayerWall.insertBefore(newPrayer, prayerWall.firstChild);
            }
        });
    }
    
    // Donation Form Submission
    const donationForm = document.getElementById('donationForm');
    if (donationForm) {
        donationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('donorName').value;
            const email = document.getElementById('donorEmail').value;
            const amount = document.getElementById('donationAmount').value;
            const type = document.getElementById('donationType').value;
            const purpose = document.getElementById('donationPurpose').value;
            
            // In a real application, you would send this data to a payment processor
            console.log('Donation Submitted:', { name, email, amount, type, purpose });
            
            // Show success message
            alert(`Thank you for your donation of $${amount}!`);
            
            // Reset form
            donationForm.reset();
        });
    }
    
    // Simulate loading prayer requests
    const prayerWall = document.getElementById('prayerWall');
    if (prayerWall) {
        setTimeout(() => {
            prayerWall.innerHTML = `
                <div class="prayer-item">
                    <h5>John D.</h5>
                    <p>Please pray for healing from my illness.</p>
                    <small class="text-muted">Posted 2 days ago</small>
                </div>
                <div class="prayer-item">
                    <h5>Sarah M.</h5>
                    <p>Praying for my family's financial situation.</p>
                    <small class="text-muted">Posted 1 week ago</small>
                </div>
                <div class="prayer-item">
                    <h5>Michael T.</h5>
                    <p>Need guidance in my career decisions.</p>
                    <small class="text-muted">Posted 2 weeks ago</small>
                </div>
            `;
        }, 1500);
    }
    
    // Add scroll indicator to hero section
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        const scrollIndicator = document.createElement('div');
        scrollIndicator.className = 'scroll-indicator';
        scrollIndicator.innerHTML = '<i class="fas fa-chevron-down fa-2x text-white"></i>';
        heroSection.appendChild(scrollIndicator);
        
        scrollIndicator.addEventListener('click', function() {
            window.scrollTo({
                top: heroSection.offsetHeight - 70,
                behavior: 'smooth'
            });
        });
    }
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const missionSection = document.getElementById('mission');
    const visionBox = document.querySelector('.vision-box');
    const missionBox = document.querySelector('.mission-box');
    const logoBox = document.querySelector('.logo-box');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                visionBox.classList.add('animate-in');
                missionBox.classList.add('animate-in');
                logoBox.classList.add('animate-in');
                
                // Optional: Unobserve after animation to prevent retriggering
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    observer.observe(missionSection);
});

window.addEventListener('scroll', function() {
    const header = document.querySelector('.transparent-header');
    if (window.scrollY > 100) {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
    } else {
        header.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
    }
});