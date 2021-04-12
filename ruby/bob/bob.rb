class Bob
  def self.hey(remark)
    if self.isYelling?(remark) and self.question?(remark)
      return 'Calm down, I know what I\'m doing!'
    end

    if self.question?(remark)
      return 'Sure.'
    end

    if self.silence?
    end

    if self.isYelling?(remark)
      return 'Whoa, chill out!'
    end

    return 'Whatever.'
  end

  def self.isYelling?(remark)
    remark === remark.upcase
  end

  def self.isQuestion?(remark)
    remark[-1] === '?'
  end

  def self.isSilence?
  end
end
