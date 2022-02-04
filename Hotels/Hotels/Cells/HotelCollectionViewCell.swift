//
//  HotelCollectionViewCell.swift
//  Hotels
//
//  Created by wsr4 on 02.02.2022.
//

import UIKit

class HotelCollectionViewCell: UICollectionViewCell {

    @IBOutlet weak var photoView: UIImageView!
    @IBOutlet weak var nameOfHotel: UILabel!
    @IBOutlet weak var starView: UIImageView!
    @IBOutlet weak var rating: UILabel!
    @IBOutlet weak var quantityOfReviews: UILabel!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }
    
}
