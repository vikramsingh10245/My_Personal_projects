package com.junit.testing;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;
import java.util.Optional;


@RequestMapping("/book")
@RestController
public class BookController {

    @Autowired
    private BookService bookService;

    @PostMapping()
    public Book addBook(@RequestBody Book book) {
        return bookService.addBook(book);
    }

    @GetMapping()
    public List<Book> getAllBooks() {
        return bookService.getAllBooks();
    }

    @GetMapping("/{bookid}")
    public Book getBookById(@PathVariable Long bookid) {
        return bookService.getBookById(bookid);
    }
    @GetMapping("/rating/{rate}")
    public List<Book> getBooksByRating(@PathVariable int rate) {
        return bookService.getBooksByRating(rate);
    }

    @PutMapping("/{bookid}")
    public Book updateBookById(@PathVariable Long bookid, @RequestBody Book book) {
        return bookService.updateBookById(bookid, book);
    }
    @DeleteMapping("/{bookid}")
    public void deleteBookById(@PathVariable Long bookid) {
         bookService.deleteBookById(bookid);
    }
}
