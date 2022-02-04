//
//  ProfileOfHotelViewController.swift
//  Hotels
//
//  Created by wsr4 on 04.02.2022.
//

import UIKit

class ProfileOfHotelViewController: UIViewController {
    
    @IBOutlet weak var nameOfHotel: UILabel!
    @IBOutlet weak var imageOfHotel: UIImageView!
    @IBOutlet weak var collectionView: UICollectionView!
    let identifire = "ReviewCollectionViewCell"
    let countCells = 1
    let offset:CGFloat = 2.0
    let reviews = Reviews()
    
    override func viewDidLoad() {
        super.viewDidLoad()
        collectionView.dataSource = self
        collectionView.delegate = self
        collectionView.register(UINib(nibName: "ReviewCollectionViewCell", bundle: nil), forCellWithReuseIdentifier: identifire)
        nameOfHotel.text = hotels.names[myIndex]
        imageOfHotel.image = hotels.images[myIndex]
    }
    
}



extension ProfileOfHotelViewController: UICollectionViewDataSource, UICollectionViewDelegate, UICollectionViewDelegateFlowLayout {
    func collectionView(_ collectionView: UICollectionView, numberOfItemsInSection section: Int) -> Int {
        return reviews.names.count
        //return images.count
    }
    
    func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell = collectionView.dequeueReusableCell(withReuseIdentifier: identifire, for: indexPath) as! ReviewCollectionViewCell
        //let image = images[indexPath.item]
        cell.nameOfGuest.text = reviews.names[indexPath.item]
        cell.textOfReview.text = reviews.textsOfReview[indexPath.item]
        cell.ratingOfHotel.text = String(reviews.ratings[indexPath.item])
        cell.star.image = reviews.star
       
        return cell
    }
    
    func collectionView(_ collectionView: UICollectionView, layout collectionViewLayout: UICollectionViewLayout, sizeForItemAt indexPath: IndexPath) -> CGSize {
        let frameCV = collectionView.frame
        
        let widthCell = frameCV.width / CGFloat(countCells)
        let heighCell = CGFloat(100.0)
        
        let spacing = CGFloat(countCells + 1) * offset / CGFloat(countCells)
        return CGSize(width: widthCell - spacing, height: heighCell - (offset * 2))
    }

}
