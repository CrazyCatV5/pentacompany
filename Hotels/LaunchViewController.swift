//
//  LaunchViewController.swift
//  Hotels
//
//  Created by wsr4 on 05.02.2022.
//

import UIKit
var hotels = Hotels()
var hotelss = [Hotel]()

class LaunchViewController: UIViewController {
    func parsing (){
       let urlString = "http://localhost/api/test"
       guard let url = URL(string: urlString) else {return}
       
       URLSession.shared.dataTask(with: url) { data, response, error in
           if let error = error {
               print(error)
               return
           }
           
           guard let data = data else {
               return
           }
           //let jsonString = String(data: data, encoding: .utf8)
           //print(jsonString)
           //2022-02-03T11:41:40.000000Z
           do {
               let decoder = JSONDecoder()
              
               let dateFormatter = DateFormatter()
               dateFormatter.dateFormat = "yyyy-MM-ddTHH:mm.ss"
               decoder.dateDecodingStrategy = .formatted(dateFormatter)
               hotelss = try decoder.decode([Hotel].self, from: data)
               for i in 0...2 {
                   //let name = hotelss[i].name
                   //names.append(name)
                   print(hotelss[i].name)
                   print(String(hotelss[i].comment.count))
               }
           }catch{
               print(error)
           }
           
       }.resume()
   }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        parsing()
        
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destination.
        // Pass the selected object to the new view controller.
    }
    */

}
