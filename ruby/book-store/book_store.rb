class BookStore
  def self.calculate_price(books)
    base_price = books.length * 8
    discount = self.calculate_discount(books)

    base_price - base_price * discount
  end

  def self.calculate_discount(books)
    uniques = books.uniq.length

    # HAH!
    if uniques === 1
      return 0
    elsif uniques === 2
      return 0.05
    elsif uniques === 3
      return 0.1
    elsif uniques === 4
      return 0.2
    elsif uniques === 5
      return 0.25
    end
  end

end
