// Hero buttons functionality
document.querySelector(".btn-primary").addEventListener("click", () => {
  document.querySelector("#menu").scrollIntoView({
    behavior: "smooth",
  });
});

document.querySelector(".btn-secondary").addEventListener("click", () => {
  document.querySelector("#reservations").scrollIntoView({
    behavior: "smooth",
  });
});

// Form submissions
document.querySelector(".reservation-form").addEventListener("submit", (e) => {
  e.preventDefault();

  // Get form data
  const formData = new FormData(e.target);
  const name = e.target.querySelector('input[type="text"]').value;

  // Show success message
  showNotification(
    `Thank you ${name}! Your reservation request has been submitted. We'll contact you soon to confirm.`,
    "success"
  );

  // Reset form
  e.target.reset();
});

document.querySelector(".contact-form").addEventListener("submit", (e) => {
  e.preventDefault();

  // Get form data
  const name = e.target.querySelector('input[type="text"]').value;

  // Show success message
  showNotification(
    `Thank you ${name}! Your message has been sent. We'll get back to you soon.`,
    "success"
  );

  // Reset form
  e.target.reset();
});

// Notification system
function showNotification(message, type = "info") {
  // Remove existing notifications
  const existingNotification = document.querySelector(".notification");
  if (existingNotification) {
    existingNotification.remove();
  }

  // Create notification element
  const notification = document.createElement("div");
  notification.className = `notification ${type}`;
  notification.innerHTML = `
        <div class="notification-content">
            <span>${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;

  // Add styles
  notification.style.cssText = `
        position: fixed;
        top: 90px;
        right: 20px;
        background-color: ${type === "success" ? "#10B981" : "#EF4444"};
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        z-index: 10000;
        transform: translateX(400px);
        transition: transform 0.3s ease;
        max-width: 400px;
        font-family: 'Poppins', sans-serif;
    `;

  notification.querySelector(".notification-content").style.cssText = `
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    `;

  notification.querySelector(".notification-close").style.cssText = `
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        padding: 0;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    `;

  // Add to page
  document.body.appendChild(notification);

  // Animate in
  setTimeout(() => {
    notification.style.transform = "translateX(0)";
  }, 100);

  // Close functionality
  notification
    .querySelector(".notification-close")
    .addEventListener("click", () => {
      notification.style.transform = "translateX(400px)";
      setTimeout(() => notification.remove(), 300);
    });

  // Auto close after 5 seconds
  setTimeout(() => {
    if (document.body.contains(notification)) {
      notification.style.transform = "translateX(400px)";
      setTimeout(() => notification.remove(), 300);
    }
  }, 5000);
}

// Add active navigation styles
const style = document.createElement("style");
style.textContent = `
    .nav-link.active {
        color: #EF4444 !important;
    }

    .nav-link.active::after {
        width: 100% !important;
    }
`;
document.head.appendChild(style);
