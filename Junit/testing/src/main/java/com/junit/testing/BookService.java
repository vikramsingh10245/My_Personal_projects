package com.junit.testing;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class BookService {

    @Autowired
    private BookRepo bookRepo;

    public Book addBook(Book book) {
        return bookRepo.save(book);
    }

    public List<Book> getAllBooks() {
        return bookRepo.findAll();
    }

    public Book getBookById(Long bookId) {
        Optional<Book> book = bookRepo.findById(bookId);
        return book.orElse(null); // or throw an exception if not found
    }

    public Book updateBookById(Long bookId, Book book) {
        Optional<Book> existingBookOptional = bookRepo.findById(bookId);
        if (existingBookOptional.isPresent()) {
            Book existingBook = existingBookOptional.get();
            if (book.getBookId().equals(existingBook.getBookId())) {
                existingBook.setName(book.getName());
                existingBook.setSummary(book.getSummary());
                existingBook.setRating(book.getRating());
                return bookRepo.save(existingBook);
            }
        }
        return null; // or throw an exception if not found
    }

    public List<Book> getBooksByRating(int rate) {
        List<Book> book= bookRepo.findByRating(rate);
        return book;
    }

    public void deleteBookById(Long bookid) {
        Optional<Book> book=bookRepo.findById(bookid);
        if (book.isPresent()) {
             bookRepo.deleteById(bookid);
        }

    }
}
