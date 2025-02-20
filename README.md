# Technical Test: "Inspirational Quote" Plugin for WordPress

## Objective
Develop a WordPress plugin that displays a random inspirational quote on the site. The plugin must be implemented following WordPress coding standards, using object-oriented programming (OOP) in PHP and Vanilla JavaScript on the frontend.

## General Requirements

- **Code Quality:**  
  - Follow the [WordPress coding standards](https://developer.wordpress.org/coding-standards/).  
  - Comment the code clearly and concisely (use PHPDoc for functions and classes).  
  - Avoid redundant or unnecessary code.
  - Use internationalization functions for text strings.

- **Version Control:**  
  - Use Git for version control.  
  - Upload all your code to a GitHub repository.

- **Delivery Time:**  
  - The task must be completed within one week.

- **Communication:**  
  - If you encounter any difficulties or have questions during development, proactively seek feedback.  
  - Include a section in the README detailing the decisions made and any inquiries you have posed during the development process.

## Technical Requirements

### PHP

- **Plugin Structure:**  
  - Implement the plugin using object-oriented programming (OOP).  
  - Create at least one main class that initializes and organizes the plugin’s functionality.

- **Actions and Filters:**  
  - Use WordPress actions and filters to integrate your plugin.  
  - For example, register a shortcode `[frase_inspiradora]` that allows the functionality to be inserted anywhere on the site.

- **Functionality:**  
  - When the shortcode is used, the plugin should display a randomly selected inspirational quote.  
  - You can either use a predefined array of quotes or load them from an external JSON file.

### JavaScript

- **Frontend Interactivity:**  
  - Use **Vanilla JavaScript** to create a feature that updates the quote without reloading the page.  
  - Implement an AJAX call (or utilize the WP REST API) to fetch a new quote from the backend when the user clicks a button.

### Extra Points

- **Custom Gutenberg Block:**  
  - Develop a custom Gutenberg block that, like the shortcode, displays a random inspirational quote.  
  - This block should be built using native WordPress technologies (modern JavaScript without external frameworks).

## Documentation and Delivery

- **Project README:**  
  - Clearly explain how to install and use the plugin.  
  - Describe the functionalities implemented and how to test them.  
  - Include any major technical decisions and outline the steps you took to arrive at the solution.

- **Code:**  
  - Ensure the code is clean, well-commented, and properly structured.  
  - Follow best practices and WordPress standards.

- **Communication:**  
  - If you encounter difficulties or have questions regarding any of the requirements, communicate them to receive feedback. Proactive communication will be highly valued.

## Final Notes
This task is designed to evaluate your technical skills in PHP (OOP, actions, filters), JavaScript (using Vanilla JS for AJAX), and your ability to communicate and document your work effectively. Remember that your code should be hosted in a public GitHub repository, and the quality of the code will be evaluated.

Good luck!
