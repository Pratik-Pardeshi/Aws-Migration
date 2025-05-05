CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    image VARCHAR(255)
);

INSERT INTO products (name, description, price, image) VALUES
('Red T-Shirt', 'Comfortable cotton t-shirt', 19.99, 'product1.jpg'),
('Blue Hoodie', 'Warm and cozy hoodie', 39.99, 'product2.jpg'),
('Sneakers', 'Stylish running shoes', 59.99, 'product3.jpg');
