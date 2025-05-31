An integrated website for selling fashion. There is protection for logging in and the password. Once entered, there is protection to encrypt it to protect customer data. There is an admin with a username and password to add products and their prices.

admin@email.com / username
admin123123 / password


There is no login or password for the database, but there is an admin who can access the database. Above it is written the password, username, and email.
 Shopping Cart Service  API Endpoints

- GET /api/products — List all products
- GET /api/products/search?keyword=... — Search products by keyword
- GET /api/products/{id} — Show product details
- POST /api/carts — Create a new cart
- GET /api/carts/{id} — View cart contents
- POST /api/carts/{id}/add?productId=...&quantity=... — Add product to cart
- DELETE /api/carts/{id}/remove?productId=... — Remove product from cart
- POST /api/carts/{id}/clear — Empty the cart
- POST /api/carts/{id}/pay — Pay for the cart



- DB name: ShoppingCartDB
- Username: postgres
- Password: (empty)


- Java 21
- Spring Boot
- PostgreSQL
- JPA (No Lombok)
- Maven






package com.ashwaq.shoppingcart.service;

import com.ashwaq.shoppingcart.entity.Product;
import com.ashwaq.shoppingcart.repository.ProductRepository;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class ProductService {

    private final ProductRepository productRepository;

    public ProductService(ProductRepository productRepository) {
        this.productRepository = productRepository;
    }

    public List<Product> getAllProducts() {
        return productRepository.findAll();
    }

    public Optional<Product> getProductById(Long id) {
        return productRepository.findById(id);
    }

    public List<Product> searchProducts(String keyword) {
        return productRepository.findByNameContainingIgnoreCase(keyword);
    }

    public Product saveProduct(Product product) {
        return productRepository.save(product);
    }

    public void deleteProduct(Long id) {
        productRepository.deleteById(id);
    }
}
