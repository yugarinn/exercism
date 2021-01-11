class ResistorColorDuo
  def self.value(colors)
    bands = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"]

    bands.index(colors[0]) * 10 + bands.index(colors[1])
  end
end
