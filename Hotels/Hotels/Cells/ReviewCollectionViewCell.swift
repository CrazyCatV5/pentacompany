//
//  ReviewCollectionViewCell.swift
//  Hotels
//
//  Created by wsr4 on 04.02.2022.
//

import UIKit

class ReviewCollectionViewCell: UICollectionViewCell {

    
    @IBOutlet weak var nameOfGuest: UILabel!
    @IBOutlet weak var textOfReview: UITextView!
    @IBOutlet weak var ratingOfHotel: UILabel!
    @IBOutlet weak var star: UIImageView!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

}
