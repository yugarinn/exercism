class Grains
  def self.square(position)
    raise ArgumentError if not position.between?(1, 64)

    2 ** (position - 1)
  end

  def self.total
    (1..64).reduce(0) { |total, current| total + self.square(current) }
  end
end
