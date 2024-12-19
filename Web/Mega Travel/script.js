let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});
 
formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
// admin_dashboard.js

// Function to fetch and display bookings
function fetchBookings() {
    fetch('fetch_bookings.php')  // Call fetch_bookings.php
        .then(response => response.json())  // Parse the JSON data
        .then(bookings => {
            const bookingsList = document.getElementById('bookings-list');
            bookingsList.innerHTML = '';  // Clear the existing content

            if (bookings.length > 0) {
                bookings.forEach(booking => {
                    const bookingElement = document.createElement('div');
                    bookingElement.classList.add('content-item');
                    bookingElement.innerHTML = `
                        <p><strong>Booking ID:</strong> ${booking.id}</p>
                        <p><strong>Name:</strong> ${booking.name}</p>
                        <p><strong>Email:</strong> ${booking.email}</p>
                        <p><strong>Phone:</strong> ${booking.phone}</p>
                        <p><strong>Address:</strong> ${booking.address}</p>
                        <p><strong>Location:</strong> ${booking.location}</p>
                        <p><strong>Guests:</strong> ${booking.guests}</p>
                        <p><strong>Arrival Date:</strong> ${booking.arrivals}</p>
                        <p><strong>Leaving Date:</strong> ${booking.leaving}</p>
                        <button class="button">View Details</button>
                    `;
                    bookingsList.appendChild(bookingElement);
                });
            } else {
                bookingsList.innerHTML = '<p>No bookings available.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching bookings:', error);
        });
}

// Fetch bookings when the page loads
document.addEventListener('DOMContentLoaded', fetchBookings);
