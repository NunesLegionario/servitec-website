CREATE TABLE orders (
    order_id INTEGER GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INTEGER NOT NULL REFERENCES usuarios (id),
    product_id INTEGER NOT NULL REFERENCES products (id),
    status TEXT NOT NULL
);
