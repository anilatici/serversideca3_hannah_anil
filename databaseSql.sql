DROP database if exists recipe;
create database recipe;
use recipe;

CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recipe_name VARCHAR(255) NOT NULL,
    recipe_description TEXT,
    recipe_ingredients TEXT,
    cuisine VARCHAR(255)
);

INSERT INTO recipes (recipe_name, recipe_description, recipe_ingredients, cuisine)
VALUES
    ('Lasagna', 'Classic Italian dish with layers of pasta, meat sauce, and cheese.', 'Lasagna noodles, ground beef, tomato sauce, ricotta cheese, mozzarella cheese', 'Italian'),
    ('Chicken Curry', 'A flavorful curry dish made with chicken, spices, and coconut milk.', 'Chicken, curry powder, coconut milk, onions, garlic, ginger', 'Indian'),
    ('Spaghetti Bolognese', 'Traditional Italian pasta dish with a meaty tomato sauce.', 'Spaghetti, ground beef, tomatoes, onions, garlic, herbs', 'Italian'),
    ('Beef Stir Fry', 'Quick and delicious stir-fried beef with vegetables.', 'Beef, soy sauce, bell peppers, broccoli, carrots, garlic', 'Asian'),
    ('Chicken Parmesan', 'Breaded chicken cutlets topped with tomato sauce and melted cheese.', 'Chicken breast, bread crumbs, marinara sauce, mozzarella cheese', 'Italian'),
    ('Tacos al Pastor', 'Mexican street food tacos with marinated pork and pineapple.', 'Pork, pineapple, tortillas, onion, cilantro', 'Mexican'),
    ('Mushroom Risotto', 'Creamy rice dish cooked with mushrooms, Parmesan cheese, and white wine.', 'Arborio rice, mushrooms, onion, garlic, vegetable broth', 'Italian'),
    ('Sushi Rolls', 'Japanese delicacy made with sushi rice, fish, and vegetables wrapped in seaweed.', 'Sushi rice, fish (e.g., tuna, salmon), cucumber, avocado, nori seaweed', 'Japanese'),
    ('Beef Burgers', 'Classic beef burgers with a juicy patty, lettuce, tomato, and cheese.', 'Ground beef, burger buns, lettuce, tomato, cheese, condiments', 'American'),
    ('Pad Thai', 'Thai stir-fried noodles with shrimp, tofu, peanuts, and tamarind sauce.', 'Rice noodles, shrimp, tofu, eggs, peanuts, tamarind sauce', 'Thai'),
    ('Chicken Caesar Salad', 'Fresh salad with grilled chicken, romaine lettuce, croutons, and Caesar dressing.', 'Grilled chicken breast, romaine lettuce, croutons, Parmesan cheese, Caesar dressing', 'American'),
    ('Chocolate Brownies', 'Rich and fudgy chocolate brownies with a gooey texture.', 'Butter, sugar, eggs, cocoa powder, flour, chocolate chips', 'Dessert');
